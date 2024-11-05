<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Configuration;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /*$team = [
            [
                'name' => 'John Doe',
                'role' => 'CEO',
                'image' => 'team-image-1-646x680.jpg',
            ],
            [
                'name' => 'Jane Doe',
                'role' => 'Marketing Manager',
                'image' => 'team-image-2-646x680.jpg',
            ],
            [
                'name' => 'Paula Jeorge',
                'role' => 'Customer Service',
                'image' => 'team-image-3-646x680.jpg',
            ],
            [
                'name' => 'Dan Blatan',
                'role' => 'Customer Service',
                'image' => 'team-image-3-646x680.jpg',
            ],
        ];*/

        view()->composer('*', function($view)
        {
            $configurations = Configuration::all()->map(function ($config) {
                if ($config->formatted) {
                    return [$config->name => ['value' => $config->value, 'formatted' => $config->formatted]];
                }
                return [$config->name => $config->value];
            })->collapse();
            $view->with(compact('configurations'));
        });
    }
}
