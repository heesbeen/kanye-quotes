<?php

namespace Heesbeen\KanyeQuotes\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Heesbeen\KanyeQuotes\Service\KanyeWestApi;
class KanyeQuotesApiController extends BaseController{

    /**
     * @return JsonResponse
     */
    public function quotes() : JsonResponse
    {
        $kanyeWestApi = new KanyeWestApi;
        $quotes = $kanyeWestApi->getQuotes();

        if (empty($quotes)) {
            return response()->json(['error' => 'Oops something went wrong'], 404);
        }

        return response()->json($quotes, 200);
    }

}
