<?php

use App\Http\Controllers\Auth\SteamLoginController;
use App\Http\Controllers\Auth\DiscordLoginController;
use App\Http\Controllers\GmodStore\GMSRoleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('welcome');
});


Route::middleware('api-checks')->group(function () {
    Route::get('/api', function () {

    });
});


Route::middleware(['auth', 'is-linked'])->group(function () {
    Route::get('/linked', function () {
        return view('linkdone');
    })->name('linked');
});


Route::prefix('auth')->as('auth.')->group(function () {
    Route::middleware('guest')->group(function () {
    Route::get('steam', [SteamLoginController::class, 'login'])->name('steam');
    Route::get('steam/callback', [SteamLoginController::class, 'callback'])->name('steam.callback');
    });

    Route::middleware(['auth', 'has-discord'])->group(function () {
        Route::get('discord', [DiscordLoginController::class, 'login'])->name('discord');
        Route::get('discord/callback', [DiscordLoginController::class, 'callback'])->name('discord.callback');
    });
});


