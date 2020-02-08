<?php

namespace App\Http\Controllers\Web;

use App\Models\Menu;
use App\Http\Requests\Api\MenuStoreRequest;
use App\Http\Requests\Api\MenuUpdateRequest;
use App\Repositories\Contracts\MenuRepositoryInterface;

class MenuController extends BaseController
{
    protected $repository;

    public function __construct(MenuRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function index()
    {
        $menus = $this->repository->all();
        return view('web.menus.index', ['menus' => $menus]);
    }

    public function show($id) {
        $menu = $this->repository->find($id);
        if($menu) return view('menus.show', $menus);
    }

    public function create() {
        return view('menus.new');
    }

    public function store(MenuUpdateRequest $request) {
        $inputs = $request->only('name', 'link', 'parent_id');
        dd($inputs);
        $menu = $this->repository->create($inputs);
        
        if($menu) return redirect()->back()->with('msg', 'create success');
    }

    public function update(MenuUpdateRequest $request, $id)
    {
        $inputs = $request->only('name', 'link', 'parent_id');
        $menu = $this->repository->find($id);

        if($menu){
            $updated = $this->repository->update($menu, $inputs);
            if ($updated) {
                return redirect()->back()->with('msg', 'update success');
            }
        }

        return Redirect::back()->withErrors(['msg', 'failed']);
    }

    public function destroy($id)
    {
        $menu = $this->repository->find($id);
        if($menu)
            $this->repository->destroy($menu);
        else
            return redirect()->back()->withErrors('msg', 'delete failed');

            return redirect()->back()->with('msg', 'delete success');
    }
}
