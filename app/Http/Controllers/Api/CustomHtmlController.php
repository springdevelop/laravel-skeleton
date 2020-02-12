<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\Api\CustomHtmlResource;
use App\Http\Resources\Api\CustomHtmlCollection;

use App\Models\CustomHtml;
use App\Http\Requests\Api\CustomHtmlUpdateRequest;
use App\Repositories\Contracts\CustomHtmlRepositoryInterface;

/**
 * @group donates
 */
class CustomHtmlController extends BaseController
{
    protected $repository;

    public function __construct(CustomHtmlRepositoryInterface $repository)
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
        $customhtmls = $this->repository->all();
        return new CustomHtmlCollection($customhtmls);//$return $this->responseSuccess(new DonateCollection($donates));
    }

    /**
     * store
     * @api {post} /donates Create Donate
     * @bodyParam name string required Name of Donate
     * @bodyParam desc string required Description of Donate
     * @bodyParam amount number required audio of Donate
     * @bodyParam date_donate string required time from of Donate
     */
    public function store(CustomHtmlUpdateRequest $request)
    {
        $inputs = $request->only('position', 'desc', 'content');
        $donate = $this->repository->create($inputs);

        if($donate) return new CustomHtmlResource($donate);//$this->responseSuccess(new DonateResource($donate));

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
        if($donate) return $this->responseSuccess(new CustomHtmlResource($donate));

        return $this->responseErrors(config('code.donate.position_not_found'), trans('messages.donate.position_not_found'));
    }


    public function update(CustomHtmlUpdateRequest $request, $id)
    {
        $inputs = $request->only('position', 'desc', 'content');
        $customhtml = $this->repository->find($id);

        if($customhtml){
            $updated = $this->repository->update($customhtml, $inputs);
            if ($updated) {
                return $this->responseSuccess(new CustomHtmlResource($updated));
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
        $customhtml = $this->repository->find($id);
        if($customhtml)
            $this->repository->destroy($customhtml);
        else
            return $this->responseErrors(config('code.basic.not_found'), trans('messages.validate.not_found'));

        return $this->responseSuccess([]);
    }
}
