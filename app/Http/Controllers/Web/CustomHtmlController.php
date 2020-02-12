<?php

namespace App\Http\Controllers\Web;

use App\Models\CustomHtml;
use App\Http\Requests\Api\DonateStoreRequest;
use App\Http\Requests\Api\CustomHtmlUpdateRequest;
use App\Repositories\Contracts\CustomHtmlRepositoryInterface;

class CustomHtmlController extends BaseController
{
    protected $repository;

    public function __construct(CustomHtmlRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }
    public function index()
    {
        $customHtmls = $this->repository->all();    
        return view('web.customhtmls.index', ['customHtmls' =>$customHtmls]);
    }

   
    public function store(CustomHtmlUpdateRequest $request)
    {
        $inputs = $request->only('position', 'desc', 'content');
        $customHtml = $this->repository->create($inputs);

        if($customHtml) return redirect()->back()->with('msg', 'create success');
    }

    public function edit($id)
    {
        $customHtml = $this->repository->find($id);
        if($customHtml)  return view('web.customHtmls.edit',['customHtml' => $customHtml]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomHtml  $customHtml
     * @return \Illuminate\Http\Response
     */
    public function update(CustomHtmlUpdateRequest $request, $id)
    {
        $inputs = $request->only('position', 'desc', 'content');
        $customHtml = $this->repository->find($id);
        if($customHtml){
            $updated = $this->repository->update($customHtml, $inputs);
            if ($updated) {
                return redirect()->back()->with('msg', 'update success');
            }
        }

        return Redirect::back()->withErrors(['msg', 'failed']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomHtml  $customHtml
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customHtml = $this->repository->find($id);
        if($customHtml)
            $this->repository->destroy($customHtml);
        else
            return redirect()->back()->withErrors('msg', 'delete failed');

            return redirect()->back()->with('msg', 'delete success');
    }
}
