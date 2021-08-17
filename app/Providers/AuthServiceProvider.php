<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();

        Passport::tokensExpireIn(Carbon::now()->addDays(15));

        Passport::refreshTokensExpireIn(Carbon::now()->addDays(30));

//        Passport::tokensCan([
//            'upload-file' => 'upload-file',
//        ]);

        // Passport::tokensExpireIn(now()->addSeconds(10));

        //Passport::tokensExpireIn(now()->addDays(15));

        //Passport::refreshTokensExpireIn(now()->addDays(30));

        //Passport::personalAccessTokensExpireIn(now()->addMonths(6));

        //Passport::useTokenModel(Token::class);
        //Passport::useClientModel(Client::class);
        //Passport::useAuthCodeModel(AuthCode::class);
        //Passport::usePersonalAccessClientModel(PersonalAccessClient::class);
    }
}
