<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\Api\PayResource;
use App\Http\Resources\Api\PayCollection;
use App\Http\Requests\Api\PayStoreRequest;
use App\Http\Requests\Api\PayUpdateRequest;
use App\Repositories\Contracts\PayRepositoryInterface;

/**
 * @group pays
 */
class PayController extends BaseController
{
    protected $repository;

    public function __construct(PayRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    /**
     * index
     * @api {get} /pays Get all list Pay
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pays = $this->repository->all();
        return new PayCollection($pays);//$this->responseSuccess(new PayCollection($pays));
    }

    /**
     * store
     * @api {post} /pays Create Pay
     * @bodyParam name string required Name of Pay
     * @bodyParam desc string required Description of Pay
     * @bodyParam amount number required audio of Pay
     * @bodyParam date_pay string required time from of Pay
     */
    public function store(PayStoreRequest $request)
    {
        $inputs = $request->only('name', 'desc', 'amount', 'date_donate');
        $pay = $this->repository->create(array_merge([
            'users_id' => 1
        ],$inputs));

        if($pay) return $this->responseSuccess(new PayResource($pay));

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed'));
    }

    /**
     * show
     * @api {post} /pays/{id} Get Pay's detail
     * Display the specified resource.
     */
    public function show($id)
    {
        $Pay = $this->repository->find($id);
        if($Pay) return $this->responseSuccess(new PayResource($Pay));

        return $this->responseErrors(config('code.Pay.position_not_found'), trans('messages.Pay.position_not_found'));
    }


    /**
     * update
     * @api {put} /pays/{id} Update Pay's detail
     * Update the specified resource in storage.
     * @bodyParam name string required Name of Pay
     * @bodyParam desc string required Description of Pay
     * @bodyParam amount number required audio of Pay
     * @bodyParam date_pay string required time from of Pay
     */
    public function update(PayUpdateRequest $request, $id)
    {
        $inputs = $request->only('name', 'desc', 'amount', 'date_donate');
        $pay = $this->repository->find($id);

        if($pay){
            $updated = $this->repository->update($pay, $inputs);
            if ($updated) {
                return $this->responseSuccess(new PayResource($updated));
            }
        }

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed'));
    }

    /**
     * delete
     * @api {delete} /pays/{id} Delete a Pay
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pay = $this->repository->find($id);
        if($pay)
            $this->repository->destroy($pay);
        else
            return $this->responseErrors(config('code.basic.not_found'), trans('messages.validate.not_found'));

        return $this->responseSuccess([]);
    }
}
