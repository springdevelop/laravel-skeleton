<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\Api\DonateResource;
use App\Http\Resources\Api\DonateCollection;
use App\Http\Requests\Api\DonateStoreRequest;
use App\Http\Requests\Api\DonateUpdateRequest;
use App\Repositories\Contracts\DonateRepositoryInterface;

/**
 * @group donates
 */
class DonateController extends BaseController
{
    protected $repository;

    public function __construct(DonateRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    /**
     * index
     * @api {get} /donates Get all list Pay
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donates = $this->repository->all();
        return new DonateCollection($donates);//$this->responseSuccess(new DonateCollection($donates));
    }

    /**
     * store
     * @api {post} /donates Create Donate
     * @bodyParam name string required Name of Donate
     * @bodyParam desc string required Description of Donate
     * @bodyParam amount number required audio of Donate
     * @bodyParam date_donate string required time from of Donate
     */
    public function store(DonateStoreRequest $request)
    {
        $inputs = $request->only('name', 'desc', 'amount', 'date_donate');
        $donate = $this->repository->create($inputs);

        if($donate) return $this->responseSuccess(new DonateResource($donate));

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed'));
    }

    /**
     * show
     * @api {post} /donates/{id} Get Pay's detail
     * Display the specified resource.
     */
    public function show($id)
    {
        $donate = $this->repository->find($id);
        if($donate) return $this->responseSuccess(new DonateResource($donate));

        return $this->responseErrors(config('code.donate.position_not_found'), trans('messages.donate.position_not_found'));
    }


    /**
     * update
     * @api {put} /donates/{id} Update Donate's detail
     * Update the specified resource in storage.
     * @bodyParam name string required Name of Donate
     * @bodyParam desc string required Description of Donate
     * @bodyParam amount number required audio of Donate
     * @bodyParam date_donate string required time from of Donate
     */
    public function update(DonateUpdateRequest $request, $id)
    {
        $inputs = $request->only('name', 'desc', 'amount', 'date_donate');
        $donate = $this->repository->find($id);

        if($donate){
            $updated = $this->repository->update($donate, $inputs);
            if ($updated) {
                return $this->responseSuccess(new DonateResource($updated));
            }
        }

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed'));
    }

    /**
     * delete
     * @api {delete} /donates/{id} Delete a Donate
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $donate = $this->repository->find($id);
        if($donate)
            $this->repository->destroy($donate);
        else
            return $this->responseErrors(config('code.basic.not_found'), trans('messages.validate.not_found'));

        return $this->responseSuccess([]);
    }
}
