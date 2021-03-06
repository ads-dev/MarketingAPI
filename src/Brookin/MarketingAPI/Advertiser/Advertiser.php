<?php
/**
 * Created by PhpStorm.
 * User: gavin
 * Date: 11/27/17
 * Time: 10:31 PM
 */

namespace Brookin\MarketingAPI\Advertiser;


use Brookin\MarketingAPI\Client;

class Advertiser extends Client
{

    public function get(AdvertiserGetRequest $request, AdvertiserGetResponse $response) {
        $this->send(self::GET, $this->getPath(__METHOD__), $request, $response);
    }

    public function add(AdvertiserGetRequest $request, AdvertiserGetResponse $response) {
        $this->send(self::POST, $this->getPath(__METHOD__), $request, $response);
    }

}