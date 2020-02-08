<?php

namespace App\Http\Controllers\Web;

use App\Models\Donate;
use App\Http\Requests\Api\DonateStoreRequest;
use App\Http\Requests\Api\DonateUpdateRequest;
use App\Repositories\Contracts\DonateRepositoryInterface;

class DonateController extends BaseController
{
    protected $repository;

    public function __construct(DonateRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function index()
    {
        $donates = $this->repository->all();    
        return view('web.donates.index', ['donates' =>$donates]);
    }

    public function show($id) {
        $donate = $this->repository->find($id);
        if($donate) return view('donates.show', $donates);
    }

    public function create() {
        return view('donates.new');
    }

    public function store(DonateUpdateRequest $request) {
        $inputs = $request->only('name', 'desc', 'amount', 'date_donate');
        $donate = $this->repository->create($inputs);

        if($donate) return redirect()->back()->with('msg', 'create success');
    }

    public function update(DonateUpdateRequest $request, $id)
    {
        $inputs = $request->only('name', 'desc', 'amount', 'date_donate');
        $donate = $this->repository->find($id);

        if($donate){
            $updated = $this->repository->update($donate, $inputs);
            if ($updated) {
                return redirect()->back()->with('msg', 'update success');
            }
        }

        return Redirect::back()->withErrors(['msg', 'failed']);
    }

    public function destroy($id)
    {
        $donate = $this->repository->find($id);
        if($donate)
            $this->repository->destroy($donate);
        else
            return redirect()->back()->withErrors('msg', 'delete failed');

            return redirect()->back()->with('msg', 'delete success');
    }
}
