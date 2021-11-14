<?php

namespace App\Http\Controllers\GmodStore;

use Everyday\GmodStore\Sdk\Api\AddonCouponsApi;
use Everyday\GmodStore\Sdk\Api\UserPurchasesApi;
use Everyday\GmodStore\Sdk\ApiException;
use Everyday\GmodStore\Sdk\Configuration;
use Everyday\GmodStore\Sdk\Model\AddonCoupon;
use GuzzleHttp\Client;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class GMSRoleController extends Controller
{
    /**
     * @throws ApiException
     */
    public static function getUserPurchases($userSID): \Illuminate\Support\Collection
    {
        $gmsToken = config('services.leysup.gms_api_key');
        $config = Configuration::getDefaultConfiguration()->setAccessToken($gmsToken);

        $apiInstance = new UserPurchasesApi(new Client(), $config);
        $with = array('addon');

        $result = $apiInstance->listUserPurchases($userSID, $with);
        $data = collect(json_decode($result, true)['data']);

        $ids = $data->filter(function($purchase) {
            return !$purchase['revoked'];
        })->map(function($purchase) {
            return $purchase['addon']['id'];
        });

        Log::error($ids);

        return($ids);
    }

//    public static function createAddonCoupon($userSID, $addonID, $couponPercent) {
//        $gmsToken = config('services.leysup.gms_api_key');
//        $config = Configuration::getDefaultConfiguration()->setAccessToken($gmsToken);
//
//        $apiInstance = new AddonCouponsApi(new Client(), $config);
//        $addonCoupon = new AddonCoupon();
//
//        $result = $apiInstance->createAddonCoupon($addonID, $addonCoupon);
//        return($result);
//    }
}
