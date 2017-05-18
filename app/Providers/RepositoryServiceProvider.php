<?php

namespace App\Providers;

use App\Repositories\TeamsRepository;
use App\Repositories\UserRepository;
use App\Team;
use App\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

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
     * Register applications services
     */
    public function register()
    {
        $this->app->bind('\App\Repositories\UserRepository', function (){
            return new UserRepository(
                new User
            );
        });

        $this->app->bind('\App\Repositories\TeamsRepository', function (){
            return new TeamsRepository(
                new Team()
            );
        });
    }
}
