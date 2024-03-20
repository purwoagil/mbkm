<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('koor',function(User $user){

            return $user->Role === 'koor';
        });
        Gate::define('dosen',function(User $user){

            return $user->Role === 'dosen';
        });
        Gate::define('mahasiswa',function(User $user){

            return $user->Role === 'mahasiswa';
        });

        // Gate::define('koor',function(User $user){

        //     return $user->username = 'purwoagil';
        // });

        // Gate::define('koor',function(User $user){

        //     return $user->username = 'purwoagil';
        // });
    }
}
