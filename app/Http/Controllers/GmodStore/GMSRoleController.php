<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class GMSRoleController extends Controller
{
    public function getPurchases()
    {
        $gmsToken = config('services.leysup.gms_api_key');

        Http::withToken($gmsToken, `Authorization`)->get('https://api.gmodstore.com/v2/users/' . Auth::user()->steam_id . '/purchases?with=addon');
    }
}
