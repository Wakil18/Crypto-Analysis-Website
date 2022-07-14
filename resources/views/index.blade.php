@extends('layouts.main')


@section('content')

<div class="container-lg" style="margin:0 auto;">
    <div class="row mt-5">

        @foreach ($response as $currency)
        <div class="col-lg-3 col-md-3 col-sm-12 text-center mb-3 mx-5">
            <div class="card" style="width: 18rem; height: 322px;">
                <img src="{{ $currency['logo_url'] }}" alt="crupto_logo" style="width:75px; margin:10px auto;">
                <div class="card-body">
                    <div class="card-title">{{ $currency['currency'] }}</div>
                    <div class="card-text" style="margin: 5px;"> Price: {{ $currency['price'] }}</div>
                    <div class="card-text" style="margin: 5px;"> Circulating Supply: {{ $currency['circulating_supply'] }}</div>
                    <div class="card-text" style="margin: 5px;"> Market Cap: {{ $currency['market_cap'] }}</div>
                    <div class="card-text" style="margin: 5px;"> Name: {{ $currency['name'] }}</div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection
