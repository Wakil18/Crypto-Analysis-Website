@extends('layouts.main')


@section('content')

<div class="container-lg" style="margin:0 auto;">
    <div class="row mt-5">

        @foreach ($response as $currency)
        <div class="col-lg-3 col-md-3 col-sm-12 text-center mb-3 mx-5">
            <div class="card" style="width: 20rem; height: 322px;">
                <img src="{{ $currency['logo_url'] }}" alt="crupto_logo" style="width:75px; height:75px; margin:10px auto;">
                <div class="card-body">
                    <div class="card-title">{{ $currency['currency'] }}</div>
                    <div class="card-text"> Price: {{ $currency['price'] }}</div>
                    <div class="card-text"> Circulating Supply: {{ $currency['circulating_supply'] }}</div>
                    <div class="card-text"> Market Cap: {{ $currency['market_cap'] }}</div>
                    <div class="card-text"> Name: {{ $currency['name'] }}</div>

                    @if ($currency['7d']['price_change_pct'] > 0)
                        <div class="green change">{{ $currency['7d']['price_change_pct'] }}</div>
                    @else
                        <div class="red change">{{ $currency['7d']['price_change_pct'] }}</div>
                    @endif

                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection
