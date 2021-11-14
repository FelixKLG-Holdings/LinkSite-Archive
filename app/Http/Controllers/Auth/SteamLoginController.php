<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SteamLoginController extends Controller
{
    public function login(): RedirectResponse
    {
        return Socialite::driver('steam')->redirect();
    }
    public function callback(): \Illuminate\Http\RedirectResponse
    {
        $steamUser=Socialite::driver('steam')->user();
        $user = User::firstOrCreate([
            'steam_id' => $steamUser->getId(),
            'steam_profile_icon' => $steamUser->getAvatar(),
        ], [
        ]);
        Auth::login($user);
        return redirect()->route('auth.discord');
    }
}
