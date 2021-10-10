<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'steam' => [
        'client_id' => null,
        'client_secret' => env('STEAM_CLIENT_SECRET'),
        'redirect' => env('APP_URL').'/auth/steam/callback'
    ],

    'discord' => [
        'client_id' => env('DISCORD_CLIENTID'),
        'client_secret' => env('DISCORD_CLIENT_SECRET'),
        'redirect' => env('APP_URL').'/auth/discord/callback',

        // optional
        'allow_gif_avatars' => (bool)env('DISCORD_AVATAR_GIF', true),
        'avatar_default_extension' => env('DISCORD_EXTENSION_DEFAULT', 'webp'), // only pick from jpg, png, webp
    ],

    'site' => [
        'discord_bot_token' => env('DISCORD_BOT_TOKEN'),
        'discord_webhook'=> env('DISCORD_WEBHOOK'),
        'discord_guildid' => env('DISCORD_GUILDID'),
        'discord_roleid' => env('DISCORD_ROLEID'),
    ],


];
