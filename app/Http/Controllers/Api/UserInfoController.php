<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class UserInfoController extends Controller
{
    public static function GetSID(Request $request) {

        $DiscordID = $request->input('id');

        try {
            $LookupUser = User::where('discord_id',$DiscordID)->first();
            return $LookupUser->steam_id;
        } catch (\Exception $e) {
            return abort(404, 'Invalid User');

        }
    }

    public static function GetPurchases(Request $request) {

    }
}
