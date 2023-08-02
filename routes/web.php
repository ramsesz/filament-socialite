<?php

use DutchCodingCompany\FilamentSocialite\Http\Controllers\SocialiteLoginController;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Route;

//TODO: Should be fixed dynamically in consuming app
$adminPanel = Filament::getPanel('admin');

Route::domain($adminPanel->getDomain())
    ->middleware($adminPanel->getMiddleWare())
    ->name('socialite.')
    ->group(function () {
        Route::get('/oauth/{provider}', [
            SocialiteLoginController::class,
            'redirectToProvider',
        ])
            ->name('oauth.redirect');

        Route::get('/oauth/callback/{provider}', [
            SocialiteLoginController::class,
            'processCallback',
        ])
            ->name('oauth.callback');
    });
