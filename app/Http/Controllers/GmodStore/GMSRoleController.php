<?php

namespace App\Http\Controllers\GmodStore;

use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class GMSRoleController extends Controller
{
    public function callPurchases(): PromiseInterface|Response
    {
        $gmsToken = config('services.leysup.gms_api_key');
        return Http::withToken($gmsToken, `Authorization`)->get('https://api.gmodstore.com/v2/users/' . Auth::user()->steam_id . '/purchases?with=addon');
    }

    public function getPurchases(): RedirectResponse
    {
        if (Auth::user()) {
        $info = $this->callPurchases();
        return redirect()->route('debug')->with('error', $info);
        } else {
            return redirect()->route('debug')->with('error', 'not signed in retard');
        }
    }
}
