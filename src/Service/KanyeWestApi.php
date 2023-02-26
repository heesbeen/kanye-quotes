<?php

namespace Heesbeen\KanyeQuotes\Service;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class KanyeWestApi {

    /**
     * @param $qty int
     * @return array
     */
    public function getQuotes(int $qty = 5) : array {
        $quotesList = $this->getQuotesList();
        return $this->getRandomNumberOfValuesFromArray($quotesList, $qty);
    }

    /**
     * @return array
     */
    public function getQuotesList() : array {
        $apiUrl = config('kanye-quotes-package.kanye_west_api_url');
        $useCache = config('kanye-quotes-package.kanye_west_api_use_cache');

        if ($useCache && $jsonData = Cache::get('kanye_west_api_cache')) {
            return $jsonData;
        }

        try {
            $response = Http::get($apiUrl);
            $jsonData = $response->json();
        } catch (ConnectionException $e) {
            Log::error('Kanye Api Connection error', $e->getTrace());
            $storedJsonData = Cache::get('kanye_west_api_cache_persistent');
            if (!empty($storedJsonData)) {
                return $storedJsonData;
            }
            return [];
        }

        if ($useCache && !empty($jsonData)) {
            Cache::put('kanye_west_api_cache',  $jsonData, 60);
            Cache::put('kanye_west_api_cache_persistent',  $jsonData);
        }
        return $jsonData;
    }

    /**
     * @param $array []
     * @param $qty int
     * @return array
     */
    public function getRandomNumberOfValuesFromArray(array $array = [], int $qty = 5) : array
    {
        if (empty($array)) {
            return [];
        }

        $randomArrayKeys = array_rand($array, $qty);

        $randomizedArray = [];
        foreach ($randomArrayKeys as $key) {
            $randomizedArray[] = $array[$key];
        }
        return $randomizedArray;
    }

}
