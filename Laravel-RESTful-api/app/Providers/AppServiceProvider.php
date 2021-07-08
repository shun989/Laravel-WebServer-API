<?php

namespace App\Providers;

use App\Http\Repositories\CustomerRepository;
use App\Http\Repositories\Impl\CustomerRepositoryImpl;
use App\Http\Repositories\Impl\ProductRepositoryImpl;
use App\Http\Repositories\ProductRepository;
use App\Http\Services\CustomerService;
use App\Http\Services\Impl\CustomerServiceImpl;
use App\Http\Services\Impl\ProductServiceImpl;
use App\Http\Services\ProductService;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            CustomerRepository::class,
            CustomerRepositoryImpl::class
        );
        $this->app->singleton(
            CustomerService::class,
            CustomerServiceImpl::class
        );

        $this->app->singleton(
            ProductRepository::class,
            ProductRepositoryImpl::class
        );

        $this->app->singleton(
            ProductService::class,
            ProductServiceImpl::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
