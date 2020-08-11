<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\DonHang\DonHangRepository;
use App\Repositories\DonHang\DonHangRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DonHangRepositoryInterface::class, DonHangRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
