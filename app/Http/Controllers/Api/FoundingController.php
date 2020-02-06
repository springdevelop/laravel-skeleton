<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\Api\FoundingResource;
use App\Http\Resources\Api\FoundingCollection;
use App\Http\Requests\Api\FoundingStoreRequest;
use App\Http\Requests\Api\FoundingUpdateRequest;
use App\Repositories\Contracts\FoundingRepositoryInterface;

/**
 * @group foundings
 */
class FoundingController extends BaseController
{
    protected $repository;

    public function __construct(FoundingRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    /**
     * index
     * @api {get} /foundings Get all list Pay
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foundings = $this->repository->all();
        return new FoundingCollection($foundings);//$return $this->responseSuccess(new DonateCollection($foundings));
    }

    /**
     * store
     * @api {post} /foundings Create Founding
     * @bodyParam date_founding string required Name of Founding
     * @bodyParam founding number required Description of Founding
     * @bodyParam currrent number required audio of Founding
     */
    public function store(FoundingStoreRequest $request)
    {
        $inputs = $request->only('date_founding', 'founding', 'current');
        $founding = $this->repository->create($inputs);

        if($founding) return new FoundingResource($founding);//$this->responseSuccess(new DonateResource($donate));

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed'));
    }

    /**
     * show
     * @api {post} /foundings/{id} Get Pay's detail
     * Display the specified resource.
     */
    public function show($id)
    {
        $founding = $this->repository->find($id);
        if($founding) return $this->responseSuccess(new FoundingResource($founding));

        return $this->responseErrors(config('code.founding.position_not_found'), trans('messages.founding.position_not_found'));
    }


    /**
     * update
     * @api {put} /foundings/{id} Update Founding's detail
     * Update the specified resource in storage.
     * @bodyParam date_founding string required Name of Founding
     * @bodyParam founding number required Description of Founding
     * @bodyParam currrent number required audio of Founding
     */
    public function update(DonateUpdateRequest $request, $id)
    {
        $inputs = $request->only('date_founding', 'founding', 'current');
        $founding = $this->repository->find($id);

        if($founding){
            $updated = $this->repository->update($founding, $inputs);
            if ($updated) {
                return $this->responseSuccess(new FoundingResource($updated));
            }
        }

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed'));
    }

    /**
     * delete
     * @api {delete} /foundings/{id} Delete a Founding
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $founding = $this->repository->find($id);
        if($founding)
            $this->repository->destroy($founding);
        else
            return $this->responseErrors(config('code.basic.not_found'), trans('messages.validate.not_found'));

        return $this->responseSuccess([]);
    }
}
