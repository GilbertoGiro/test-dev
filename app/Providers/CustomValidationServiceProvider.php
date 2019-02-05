<?php

namespace App\Providers;

use App\Utilities\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class CustomValidationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $files = scandir(app_path('Rule'));
        foreach ($files as $key => $file) {
            if ($file !== '.' && $file !== '..') {
                $class = str_replace('.php', '', $file);
                $file = Str::from_camel_case($class);
                Validator::extend($file, function ($attribute, $value, $parameters, $validator) use ($class) {
                    $class = 'App\\Rule\\' . $class;
                    $class = new $class;
                    return $class->validate($attribute, $value);
                });
            }
        }
    }
}
