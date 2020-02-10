<?php

namespace App\Http\Controllers\Web;

use App\Models\Founding;
use App\Http\Requests\Api\FoundingStoreRequest;
use App\Http\Requests\Api\FoundingUpdateRequest;
use App\Repositories\Contracts\FoundingRepositoryInterface;
use Carbon\Carbon;

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
        return view('web.foundings.index',['foundings' => $foundings]);
    }

    public function show($id) {
        $founding = $this->repository->find($id);
        if($founding) return view('web.foundings.show', $founding);
    }

    public function create() {
        return view('web.foundings.new');
    }
    public function edit($id) {
        $founding = $this->repository->find($id);
        if($founding)  return view('web.foundings.edit',['founding' => $founding]);
    }

    public function store(FoundingUpdateRequest $request) {
        $inputs = $request->only('date_founding', 'founding', 'current');
        $founding = $this->repository->create($inputs);
        if($founding) return redirect()->back()->with('msg', 'create success');
    }

    public function update(FoundingUpdateRequest $request, $id)
    {
        $inputs = $request->only('date_founding', 'founding', 'current');
        $inputs['date_founding'] = Carbon::createFromFormat('d/m/Y', $inputs['date_founding']);
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
