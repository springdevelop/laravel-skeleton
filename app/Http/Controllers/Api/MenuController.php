<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\Api\MenuResource;
use App\Http\Resources\Api\MenuCollection;
use App\Http\Requests\Api\MenuStoreRequest;
use App\Http\Requests\Api\MenuUpdateRequest;
use App\Repositories\Contracts\MenuRepositoryInterface;

/**
 * @group menus
 */
class MenuController extends BaseController
{
    protected $repository;

    public function __construct(MenuRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    /**
     * index
     * @api {get} /menus Get all list Menu
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = $this->repository->all();
        return new MenuCollection($menus);//$this->responseSuccess(new MenuCollection($menus));
    }

    /**
     * store
     * @api {post} /menus Create Menu
     * @bodyParam name string required Name of Menu
     * @bodyParam desc string required Description of Menu
     * @bodyParam amount number required audio of Menu
     * @bodyParam date_Menu string required time from of Menu
     */
    public function store(MenuStoreRequest $request)
    {
        $inputs = $request->only('name', 'link', 'parent_id');
        $menu = $this->repository->create(array_merge([
            'users_id' => 1
        ],$inputs));

        if($menu) return $this->responseSuccess(new MenuResource($menu));

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed'));
    }

    /**
     * show
     * @api {post} /menus/{id} Get Menu's detail
     * Display the specified resource.
     */
    public function show($id)
    {
        $menu = $this->repository->find($id);
        if($menu) return $this->responseSuccess(new MenuResource($menu));

        return $this->responseErrors(config('code.menu.position_not_found'), trans('messages.menu.position_not_found'));
    }


    /**
     * update
     * @api {put} /menus/{id} Update Menu's detail
     * Update the specified resource in storage.
     * @bodyParam name string required Name of Menu
     * @bodyParam desc string required Description of Menu
     * @bodyParam amount number required audio of Menu
     * @bodyParam date_Menu string required time from of Menu
     */
    public function update(MenuUpdateRequest $request, $id)
    {
        $inputs = $request->only('name', 'link', 'parent_id');
        $menu = $this->repository->find($id);

        if($menu){
            $updated = $this->repository->update($menu, $inputs);
            if ($updated) {
                return $this->responseSuccess(new MenuResource($updated));
            }
        }

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed'));
    }

    /**
     * delete
     * @api {delete} /menus/{id} Delete a Menu
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $menu = $this->repository->find($id);
        if($menu)
            $this->repository->destroy($menu);
        else
            return $this->responseErrors(config('code.basic.not_found'), trans('messages.validate.not_found'));

        return $this->responseSuccess([]);
    }
}
