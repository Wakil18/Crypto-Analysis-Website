<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function getData(Request $request){
        $response = Http::get("https://api.nomics.com/v1/currencies/ticker?key=10b2c3c8d9447645cef3261207c330ac88646203&per-page=30&page=1");
        return view('index', ['response' => $response->json()]);
    }

    public function about(){
        return view('about');
    }

}




//      https://api.nomics.com/v1/currencies?key=10b2c3c8d9447645cef3261207c330ac88646203&ids=BTC,ETH,XRP&attributes=id,name,logo_url&platform-currency=ETH
//      https://api.nomics.com/v1/currencies/ticker?key=10b2c3c8d9447645cef3261207c330ac88646203
