<?php

namespace App\Http\Controllers\Api;

use Exception;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class UserInfoController extends Controller
{
    public static function GetSID(Request $request) {

        $DiscordID = $request->input('id');

        try {
//            return User::where('discord_id',$DiscordID)->first()->steam_id;
            return response()->json([
                'id' => (string) User::where('discord_id',$DiscordID)->first()->steam_id,
            ]);
        } catch (\Exception $e) {
            Log::error($e);
            return abort(404, 'Invalid User');
        }
    }

    public static function intGetSID($DiscordID) {

        try {
            return User::where('discord_id',$DiscordID)->first()->steam_id;
        } catch (Exception $e) {
            Log::error($e);
            return abort(404, 'Invalid User');
        }
    }
}
