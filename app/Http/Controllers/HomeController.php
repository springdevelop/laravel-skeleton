<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Api\DonateResource;
use App\Http\Resources\Api\DonateCollection;
use App\Http\Requests\Api\DonateStoreRequest;
use App\Http\Requests\Api\DonateUpdateRequest;
use App\Repositories\Contracts\DonateRepositoryInterface;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }
}
