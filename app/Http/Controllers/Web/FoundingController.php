<?php

namespace App\Http\Controllers\Web;

use App\Models\Founding;
use App\Http\Requests\Api\FoundingStoreRequest;
use App\Http\Requests\Api\FoundingUpdateRequest;
use App\Repositories\Contracts\FoundingRepositoryInterface;

class FoundingController extends BaseController
{
    protected $repository;

    public function __construct(FoundingRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function index()
    {
        $foundings = $this->repository->all();
        return view('foundings.index', $foundings);
    }

    public function show($id) {
        $founding = $this->repository->find($id);
        if($founding) return view('foundings.show', $founding);
    }

    public function create() {
        return view('foundings.new');
    }

    public function store(FoundingUpdateRequest $request) {
        $inputs = $request->only('date_founding', 'founding', 'current');
        $founding = $this->repository->create($inputs);

        if($founding) return redirect()->back()->with('msg', 'create success');
    }

    public function update(FoundingUpdateRequest $request, $id)
    {
        $inputs = $request->only('date_founding', 'founding', 'current');
        $founding = $this->repository->find($id);

        if($founding){
            $updated = $this->repository->update($founding, $inputs);
            if ($updated) {
                return redirect()->back()->with('msg', 'update success');
            }
        }

        return Redirect::back()->withErrors(['msg', 'failed']);
    }

    public function destroy($id)
    {
        $founding = $this->repository->find($id);
        if($founding)
            $this->repository->destroy($founding);
        else
            return redirect()->back()->withErrors('msg', 'delete failed');

            return redirect()->back()->with('msg', 'delete success');
    }
}
