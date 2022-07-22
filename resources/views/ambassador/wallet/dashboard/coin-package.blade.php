@extends('ambassador.kyc.layouts.app')
@section('title')
    Add New Card
@endsection
@section('content')
    <link rel="stylesheet" href="{{url('ambassador_assets/css/wallet.css')}}">
    <div class="wallet-dashboad">
        <div class="wallet-dashboad-inner">
            <div class="container">
                <div class="wallet-dashboad-main">
                    <div class="wallet-dashboad-main-inner">
                        <div class="dashboard-sides">
                            <div class="dashboard-side-bar">
                                <div class="dahboard-title multi">
                                    <div class="page-route">
                                        Dashboard <span class="beadcrumb">/ Coin Purchase</span>
                                    </div>
                                    <div class="add-button">
                                        <div class="add-button-inner">
                                            <div class="add-button-main">
                                                <a href="javascript:void(0)">
                                                    <span class="add-button-span">
                                                        <div class="icon"><span class="ti-shopping-cart"></span></div>
                                                        <div class="text">View Cart</div>
                                                        <span class="count">
                                                            13
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-content-main">
                                <div class="dashboard-content-main-inner">
                                    <div class="coin-packs-outer">
                                        <div class="coin-packs-inner">
                                            <div class="coin-packs-card custom-card custom-border custom-shadow">
                                                <div class="dahboard-card-title-bar custom-padding">
                                                    <div class="text text-center">
                                                        Package 1
                                                    </div>
                                                </div>
                                                <div class="coin-pack-card-inner">
                                                    <div class="coin-pack-card-image">
                                                        <img src="{{asset('ambassador_assets/images/icons/coin.png')}}" alt="">
                                                    </div>
                                                    <div class="coin-pack-card-coins">
                                                        25 Coins
                                                    </div>
                                                    <div class="coin-pack-card-coin-value">
                                                        <span class='dolar'>$</span> 10
                                                    </div>
                                                </div>
                                                <div class="coin-pack-card-cart-btn">
                                                    <div class="coin-pack-card-cart-btn-inner">
                                                        <a href="javascript:void(0)" class="coin-pack-card-cart-link">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="coin-packs-card custom-card custom-border custom-shadow">
                                                <div class="dahboard-card-title-bar custom-padding">
                                                    <div class="text text-center">
                                                        Package 2
                                                    </div>
                                                </div>
                                                <div class="coin-pack-card-inner">
                                                    <div class="coin-pack-card-image">
                                                        <img src="{{asset('ambassador_assets/images/icons/coin.png')}}" alt="">
                                                    </div>
                                                    <div class="coin-pack-card-coins">
                                                        50 Coins
                                                    </div>
                                                    <div class="coin-pack-card-coin-value">
                                                        <span class='dolar'>$</span> 15
                                                    </div>
                                                </div>
                                                <div class="coin-pack-card-cart-btn">
                                                    <div class="coin-pack-card-cart-btn-inner">
                                                        <a href="javascript:void(0)" class="coin-pack-card-cart-link">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="coin-packs-card custom-card custom-border custom-shadow">
                                                <div class="dahboard-card-title-bar custom-padding">
                                                    <div class="text text-center">
                                                        Package 3
                                                    </div>
                                                </div>
                                                <div class="coin-pack-card-inner">
                                                    <div class="coin-pack-card-image">
                                                        <img src="{{asset('ambassador_assets/images/icons/coin.png')}}" alt="">
                                                    </div>
                                                    <div class="coin-pack-card-coins">
                                                        75 Coins
                                                    </div>
                                                    <div class="coin-pack-card-coin-value">
                                                        <span class='dolar'>$</span> 25
                                                    </div>
                                                </div>
                                                <div class="coin-pack-card-cart-btn">
                                                    <div class="coin-pack-card-cart-btn-inner">
                                                        <a href="javascript:void(0)" class="coin-pack-card-cart-link">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="coin-packs-card custom-card custom-border custom-shadow">
                                                <div class="dahboard-card-title-bar custom-padding">
                                                    <div class="text text-center">
                                                        Package 4
                                                    </div>
                                                </div>
                                                <div class="coin-pack-card-inner">
                                                    <div class="coin-pack-card-image">
                                                        <img src="{{asset('ambassador_assets/images/icons/coin.png')}}" alt="">
                                                    </div>
                                                    <div class="coin-pack-card-coins">
                                                        25 Coins
                                                    </div>
                                                    <div class="coin-pack-card-coin-value">
                                                        <span class='dolar'>$</span> 10
                                                    </div>
                                                </div>
                                                <div class="coin-pack-card-cart-btn">
                                                    <div class="coin-pack-card-cart-btn-inner">
                                                        <a href="javascript:void(0)" class="coin-pack-card-cart-link">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="coin-packs-card custom-card custom-border custom-shadow">
                                                <div class="dahboard-card-title-bar custom-padding">
                                                    <div class="text text-center">
                                                        Package 5
                                                    </div>
                                                </div>
                                                <div class="coin-pack-card-inner">
                                                    <div class="coin-pack-card-image">
                                                        <img src="{{asset('ambassador_assets/images/icons/coin.png')}}" alt="">
                                                    </div>
                                                    <div class="coin-pack-card-coins">
                                                        25 Coins
                                                    </div>
                                                    <div class="coin-pack-card-coin-value">
                                                        <span class='dolar'>$</span> 10
                                                    </div>
                                                </div>
                                                <div class="coin-pack-card-cart-btn">
                                                    <div class="coin-pack-card-cart-btn-inner">
                                                        <a href="javascript:void(0)" class="coin-pack-card-cart-link">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="coin-packs-card custom-card custom-border custom-shadow">
                                                <div class="dahboard-card-title-bar custom-padding">
                                                    <div class="text text-center">
                                                        Package 6
                                                    </div>
                                                </div>
                                                <div class="coin-pack-card-inner">
                                                    <div class="coin-pack-card-image">
                                                        <img src="{{asset('ambassador_assets/images/icons/coin.png')}}" alt="">
                                                    </div>
                                                    <div class="coin-pack-card-coins">
                                                        100 Coins
                                                    </div>
                                                    <div class="coin-pack-card-coin-value">
                                                        <span class='dolar'>$</span> 10
                                                    </div>
                                                </div>
                                                <div class="coin-pack-card-cart-btn">
                                                    <div class="coin-pack-card-cart-btn-inner">
                                                        <a href="javascript:void(0)" class="coin-pack-card-cart-link">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
    </script>
    @push('scripts')
    <script>
        
    </script>
    @endpush
@endsection