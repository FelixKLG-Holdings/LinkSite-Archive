<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class UserLinkController extends Controller
{
    public static function unlinkUser(Request $request)
    {

        $DiscordID = $request->input('id');

        try {
            return User::where('discord_id', $DiscordID)->first()->delete();
        } catch (Exception $e) {
            Log::error($e);
            return abort(404, 'Invalid User');
        }
    }
}
