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
        Gate::define('casir',function(User $user){
            return $user->role === 'casir';
        });

        Gate::define('waiter',function(User $user){
            return $user->role === 'waiter';
        });

        Gate::define('kitchen',function(User $user){
            return $user->role === 'kitchen';
        });
    }
}
