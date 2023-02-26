<?php

namespace Heesbeen\KanyeQuotes\Http\Controllers;

use Heesbeen\KanyeQuotes\Service\KanyeWestApi;
use Illuminate\Routing\Controller as BaseController;

class KanyeQuotesController extends BaseController{

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() : \Illuminate\Contracts\Support\Renderable
    {
        $kanyeWestApi = new KanyeWestApi;
        $quotes = $kanyeWestApi->getQuotes();

        return view(
            'kanye-quotes-package::kanye-quotes',
            [
                'quotes' => $quotes
            ]
        );
    }

}
