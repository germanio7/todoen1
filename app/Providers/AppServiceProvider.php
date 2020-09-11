<?php

namespace App\Providers;

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
        $path = base_path('counter.json');
        $counter = file_get_contents($path);
        $elements = json_decode($counter, true);

        $visits = collect($elements['visitantes']);
        $total = $elements['total'];
        if (count($visits) > 0) {
            foreach ($visits as $item) {
                if ($item['ip'] != request()->ip() || $item['date'] != now()->format('d-m-Y')) {
                    $new = [
                        'ip' => request()->ip(),
                        'date' =>now()->format('d-m-Y')
                    ];
                    $visits->pull($visits->search($item));
                    $visits->push($new);
                    $total++;
                } 
            }
        }else {
            $new = [
                'ip' => request()->ip(),
                'date' =>now()->format('d-m-Y')
            ];
            $visits->push($new);
            $total++;
        }

        $aux = collect([
            'visitantes' => $visits,
            'total' => $total
        ]);

        file_put_contents($path, $aux);

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
