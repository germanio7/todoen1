<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Illuminate\Support\Facades\Session;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $aux = DB::table('visits')->get();
        // dd($aux);

        $visits = DB::table('visits')->where('ip', request()->ip())->where('date', now()->format('d-m-Y'))->get();

        if (count($visits) < 1) {
            DB::table('visits')->insert([
                'ip' => request()->ip(),
                'date' => now()->format('d-m-Y'),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        Inertia::share([
            'errors' => function () {
                return Session::get('errors')
                    ? Session::get('errors')->getBag('default')->getMessages()
                    : (object) [];
            },
        ]);

        Inertia::share('flash', function () {
            return [
                'message' => Session::get('message'),
            ];
        });
    }
}
