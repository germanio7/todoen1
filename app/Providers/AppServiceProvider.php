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
        $visits = DB::table('visits')->get();
        dd($visits);
        if (count($visits) > 0) {
            foreach ($visits as $item) {
                if ($item->ip != request()->ip() || $item->date != now()->format('d-m-Y')) {
                    DB::table('visits')->insert([
                        'ip' => request()->ip(),
                        'date' => now()->format('d-m-Y'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                } 
            }
        } else {
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
