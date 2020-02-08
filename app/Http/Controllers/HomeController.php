<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\DonateRepositoryInterface;
use App\Repositories\Contracts\PayRepositoryInterface;
use App\Repositories\Contracts\FoundingRepositoryInterface;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $donateRepository;
    protected $payRepository;
    protected $foundingRepository;

    public function __construct(DonateRepositoryInterface $donateRepository,
        PayRepositoryInterface $payRepository,
        FoundingRepositoryInterface $foundingRepository)
    {
        // $this->middleware('auth');
        $this->donateRepository = $donateRepository;
        $this->payRepository = $payRepository;
        $this->foundingRepository = $foundingRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $donateList = $this->donateRepository->all();
        $payList = $this->payRepository->all();
        $foundingList = $this->foundingRepository->all();

        return view('home', ['foundings' => $foundingList, 'donates' => $donateList]);
    }
}
