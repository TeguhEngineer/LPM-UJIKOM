<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

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
        Gate::define('admin', function(User $user) {
            return $user->role === 'admin';
        });

        Gate::define('petugas', function(User $user) {
            return $user->role === 'petugas';
        });

        Gate::define('masyarakat', function(User $user) {
            return $user->role === 'masyarakat';
        });

        
    }
}
