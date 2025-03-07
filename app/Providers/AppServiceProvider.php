<?php

namespace App\Providers;

use App\Repositories\PostRepository;
use App\Repositories\PostRepositoryInterface;
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
        // $this->app->bind(
        //     'App\Repositories\PostRepositoryInterface',
        //     'App\Repositories\PostRepository'
        // );
        // $this->app->singleton(PostRepository::class, function ($app) {
        //     return new PostRepository();
        // });
        // $this->app->bind(PostRepository::class, function ($app) {
        //     return new PostRepository();
        // });
        //
        $this->app->singleton(PostRepositoryInterface::class, PostRepository::class);
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
