<?php namespace App\maguttiCms\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\Rules\Password;

class SystemServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {


        Password::defaults(function () {
            $rule = Password::min(8)->letters()->mixedCase()->numbers()->symbols();

            return $this->app->isProduction()
                ? $rule->uncompromised()
                : $rule;
        });

        // Set the Throttler plugin for Mailtrap.
        if (env('MAIL_HOST', '') == 'smtp.mailtrap.io') {

            // Mailtrap has a rate limit of 2 emails per 10 seconds.
            Mail::getSwiftMailer()
                ->registerPlugin(new \Swift_Plugins_ThrottlerPlugin(10, \Swift_Plugins_ThrottlerPlugin::MESSAGES_PER_MINUTE));
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
