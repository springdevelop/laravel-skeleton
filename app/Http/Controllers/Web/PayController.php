<?php

namespace App\Http\Controllers\Web;

use App\Models\Pay;
use App\Http\Requests\Api\PayStoreRequest;
use App\Http\Requests\Api\PayUpdateRequest;
use App\Repositories\Contracts\PayRepositoryInterface;

class PayController extends BaseController
{
    protected $repository;

    public function __construct(PayRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function index()
    {
        $pays = $this->repository->all();
        return view('pays.index', $pays);
    }

    public function show($id) {
        $pay = $this->repository->find($id);
        if($pay) return view('pays.show', $pays);
    }

    public function create() {
        return view('pays.new');
    }

    public function store(PayUpdateRequest $request) {
        $inputs = $request->only('name', 'desc', 'amount', 'date_pay');
        $pay = $this->repository->create($inputs);

        if($pay) return redirect()->back()->with('msg', 'create success');
    }

    public function update(PayUpdateRequest $request, $id)
    {
        $inputs = $request->only('name', 'desc', 'amount', 'date_pay');
        $pay = $this->repository->find($id);

        if($pay){
            $updated = $this->repository->update($pay, $inputs);
            if ($updated) {
                return redirect()->back()->with('msg', 'update success');
            }
        }

        return Redirect::back()->withErrors(['msg', 'failed']);
    }

    public function destroy($id)
    {
        $pay = $this->repository->find($id);
        if($pay)
            $this->repository->destroy($pay);
        else
            return redirect()->back()->withErrors('msg', 'delete failed');

            return redirect()->back()->with('msg', 'delete success');
    }
}
