<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $services = [
        \App\Repositories\Contracts\UserRepositoryInterface::class => \App\Repositories\UserRepository::class,
        \App\Repositories\Contracts\DonateRepositoryInterface::class => \App\Repositories\DonateRepository::class,
        \App\Repositories\Contracts\PayRepositoryInterface::class => \App\Repositories\PayRepository::class,
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->services as $interface => $service) {
            App::bind($interface, $service);
        }
    }
}
