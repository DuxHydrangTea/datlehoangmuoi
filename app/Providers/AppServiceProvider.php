<?php

namespace App\Providers;

use App\Repositories\PostRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Eloquent\PostRepository;
use App\Models\Post;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\UserRepositoryInterface;
use App\Models\User;
use App\Models\Category;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\Eloquent\CategoryRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->singleton(PostRepositoryInterface::class, function () {
            return new PostRepository(new Post);
        });
        $this->app->singleton(UserRepositoryInterface::class, function () {
            return new UserRepository(new User);
        });
        $this->app->singleton(CategoryRepositoryInterface::class, function () {
            return new CategoryRepository(new Category);
        }); 
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}