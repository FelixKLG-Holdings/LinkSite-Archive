<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Facades\Socialite;

class DiscordLoginController extends Controller
{
    public function login(Request $request)
    {
        return Socialite::driver('discord')->setScopes(['identify', 'guilds', 'guilds.join'])->redirect();
    }

    public function notification(): \Illuminate\Http\Client\Response
    {
        $discord_webhook = config('services.site.discord_webhook');
        return Http::post($discord_webhook, [
            'embeds' => [
                [
                    'title' => "Account Verified",
                    'description' => "A new account has been linked.",
                    'url' => "https://gmodstore.com/users/" . Auth::user()->steam_id,
                    'color' => '7506394',
                    'fields' => [
                        [
                            'name' => 'Discord Account',
                            'value' => '<@' . Auth::user()->discord_id . '>',
                        ], [
                            'name' => 'Discord ID',
                            'value' => Auth::user()->discord_id,
                        ],
                        [
                            'name' => 'SteamID64',
                            'value' => Auth::user()->steam_id,
                        ]
                    ],
                    'thumbnail' => [
                        'url' => Auth::user()->steam_profile_icon
                    ],
                    'footer' => [
                        'text' => 'Ley\'s Discord Link',
                        'icon_url' => 'https://leystryku.support/img/icon-anim.gif',
                        'inline' => true
                    ]
                ]
            ],
        ])->throw();
    }

    public function joinGuild(): \Illuminate\Http\Client\Response
    {
        $discord_guildid = config('services.site.discord_guildid');
        $discord_roleid = config('services.site.discord_roleid');
        $discord_bot_token = config('services.site.discord_bot_token');
        return Http::withToken($discord_bot_token, 'Bot')->put('https://discord.com/api/v9/guilds/'.$discord_guildid.'/members/'.Auth::user()->discord_id, [
            'access_token' => Auth::user()->discord_token,
            'roles' => [$discord_roleid]
        ])->throw();
    }
    public function addRole(): \Illuminate\Http\Client\Response
    {
        $discord_roleid = config('services.site.discord_roleid');
        $discord_guildid = config('services.site.discord_guildid');
        $discord_bot_token = config('services.site.discord_bot_token');
        return Http::withToken($discord_bot_token, 'Bot')->put('https://discord.com/api/v9/guilds/'.$discord_guildid.'/members/'.Auth::user()->discord_id.'/roles/' . $discord_roleid);
    }

    public function callback(): RedirectResponse
    {
        $discordUser = Socialite::driver('discord')->user();
        Auth::user()->update(['discord_id' => $discordUser->getId(), 'discord_token' => $discordUser->token, 'discord_refresh_token' => $discordUser->refreshToken]);
        $this->notification();
        $this->addRole();
        $this->joinGuild();
        return redirect()->route('linked');
    }

}
