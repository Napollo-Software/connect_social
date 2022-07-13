@extends('ambassador.kyc.layouts.app')
@section('title')
Kyc Submission
@endsection
@section('content')
<link rel="stylesheet" href="{{url('ambassador_assets/css/wallet.css')}}">
<div class="wallet-screen-section">
                <div class="wallet-screen-section-main">
                    <div class="container">
                        <div class="wallet-screen-section-inner">
                            <div class="wallet-section-grid">
                                <div class="wallet-earning-col">
                                    <div class="wallet-earning-top-bar">
                                        <div class="wallet-earning-top-bar-title">
                                            <div class="wallet-earning-top-bar-title-text">
                                                <div class="text">
                                                    Earnings
                                                </div>
                                                <div class="filter-icon open-filter hover-shadow">
                                                    <div class="icon"><span class="ti-filter"></span></div>
                                                    <div class="filter-dropdown">
                                                        <div class="filter-dropdown-inner">
                                                            <div class="filter-dropdown-main">
                                                                <div class="wallet-earning-filter">
                                                                    <div class="wallet-earning-filter-inner">
                                                                        <div class="wallet-earning-filter-maim custom-card custom-border custom-padding clasic-shadow">
                                                                            <div class="wallet-earning-filter-text">
                                                                                Filter by Date 
                                                                            </div>
                                                                            <div class="wallet-earning-filter-inputs">
                                                                                <div class="label-text">Start Date</div>
                                                                                <div class="wallet-earning-filter-single-input">
                                                                                    <input type="date">
                                                                                </div>
                                                                                <div class="label-text">End Date</div>
                                                                                <div class="wallet-earning-filter-single-input">
                                                                                    <input type="date">
                                                                                </div>
                                                                            </div>
                                                                            <div class="wallet-earning-filter-text">
                                                                                Filter by Type:
                                                                            </div>
                                                                            <div class="wallet-earning-filter-inputs">
                                                                                <div class="wallet-earning-filter-single-input">
                                                                                    <label for="check-01"><input type="checkbox" id="check-01"> <span class="text">Ambassadors</span></label>
                                                                                </div>
                                                                                <div class="wallet-earning-filter-single-input">
                                                                                    <label for="check-02"><input type="checkbox" id="check-02"> <span class="text">Merchants</span></label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="wallet-earning-filter-text">
                                                                                Filter by Tier:
                                                                            </div>
                                                                            <div class="wallet-earning-filter-inputs">
                                                                                <div class="wallet-earning-filter-single-input">
                                                                                    <label for="check-03"><input type="checkbox" id="check-03"> <span class="text">T1</span></label>
                                                                                </div>
                                                                                <div class="wallet-earning-filter-single-input">
                                                                                    <label for="check-04"><input type="checkbox" id="check-04"> <span class="text">T2</span></label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="action-button text-right">
                                                                                <button class="black-button">Apply</button>
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
                                        <div class="wallet-earning-top-bar-extened-button">
                                            <button class="black-button">Extend Your Network</button>
                                        </div>
                                    </div>
                                    <div class="wallet-earning-stats">
                                        <div class="wallet-earning-stats-inner">
                                            <div class="wallet-earning-stats-main">
                                                <div class="wallet-earning-stats-main-box custom-card custom-border">
                                                    <div class="wallet-earning-stats-box">
                                                        <div class="wallet-earning-stats-box-inner">
                                                            <div class="wallet-earning-stats-box-title">
                                                                <div class="top-text">
                                                                    Earnings From Personal
                                                                </div>
                                                                <div class="bottom-text">
                                                                    <span class="block-text">
                                                                        Network Tier 1
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="wallet-earning-stats-box-value">
                                                                <div class="wallet-earning-stats-box-value-inner">
                                                                    <div class="wallet-earning-stats-coin">
                                                                        <img src="{{asset('assets/images/icons/coin.png')}}" alt="">
                                                                    </div>
                                                                    <div class="wallet-earning-stats-value-inner">
                                                                        <div class="wallet-earning-stats-value-text">
                                                                            <div class="wallet-earning-stats-value-top-text">
                                                                                Connect Coins Earned
                                                                            </div>
                                                                            <div class="wallet-earning-stats-value-text-value">
                                                                                50
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="connect-coins">
                                                                <div class="connect-coin-inner">
                                                                    <div class="connect-coins-main">
                                                                        <div class="connect-coins-text">
                                                                            Dollar value of connect coins
                                                                        </div>
                                                                        <div class="connect-coins-coins">
                                                                            <div class="connect-coins-icon">
                                                                            <img src="{{asset('ambassador_assets/images/icons/coins.svg')}}" alt="">
                                                                            </div>
                                                                            <div class="connect-coin-text">
                                                                                $10.00k
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wallet-earning-stats-main-box custom-card custom-border">
                                                    <div class="wallet-earning-stats-box">
                                                        <div class="wallet-earning-stats-box-inner">
                                                            <div class="wallet-earning-stats-box-title">
                                                                <div class="top-text">
                                                                    Earnings From Extended
                                                                </div>
                                                                <div class="bottom-text">
                                                                    <span class="block-text">
                                                                        Network Tier 2
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="wallet-earning-stats-box-value">
                                                                <div class="wallet-earning-stats-box-value-inner">
                                                                    <div class="wallet-earning-stats-coin">
                                                                        <img src="{{asset('assets/images/icons/coin.png')}}" alt="">
                                                                    </div>
                                                                    <div class="wallet-earning-stats-value-inner">
                                                                        <div class="wallet-earning-stats-value-text">
                                                                            <div class="wallet-earning-stats-value-top-text">
                                                                                Connect Coins Earned
                                                                            </div>
                                                                            <div class="wallet-earning-stats-value-text-value">
                                                                                50
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="connect-coins">
                                                                <div class="connect-coin-inner">
                                                                    <div class="connect-coins-main">
                                                                        <div class="connect-coins-text">
                                                                            Dollar value of connect coins
                                                                        </div>
                                                                        <div class="connect-coins-coins">
                                                                            <div class="connect-coins-icon">
                                                                            <img src="{{asset('ambassador_assets/images/icons/coins.svg')}}" alt="">
                                                                            </div>
                                                                            <div class="connect-coin-text">
                                                                                $10.00k
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
                        </div>
                        <!-- Stats Table -->
                        <div class="wallet-stats-table">
                            <div class="wallet-stats-table-inner">
                                <div class="wallet-stats-table-title">
                                    Transactions
                                </div>
                                <div class="wallet-stats-table-main">
                                    <div class="wallet-stats-table-outer table-responsive  custom-card custom-border custom-padding clasic-shadow">
                                        <table id="wallet-stats" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Role</th>
                                                    <th>Activity</th>
                                                    <th>Network Type</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="credit">- $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="credit">- $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="debit">+ $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="credit">- $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="debit">+ $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="debit">+ $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="debit">+ $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="debit">+ $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="debit">+ $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="debit">+ $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="debit">+ $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="debit">+ $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="debit">+ $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="debit">+ $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="debit">+ $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="debit">+ $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="debit">+ $3000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Laura kiniare</td>
                                                    <td>Merchant</td>
                                                    <td>ABC</td>
                                                    <td>T1</td>
                                                    <td>26-03-2021</td>
                                                    <td><span class="debit">+ $3000.00</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Stats Graph -->
                        <div class="wallet-stats-graph">
                            <div class="wallet-stats-graph-inner">
                                <div class="wallet-stats-graph-title">
                                    Network
                                </div>
                                <div class="wallet-stats-graph-main">
                                    <div class="wallet-stats-graph-main-inner">
                                        <div class="wallet-stats-graph-all-graphs">
                                            <div class="wallet-stats-graph-single">
                                                <div class="stats-graph   custom-card custom-border custom-padding clasic-shadow">
                                                    <div class="stats-graph-title">
                                                        Ambassador Stats
                                                    </div>
                                                    <canvas id="ambassador-canvas" width="400" height="400"></canvas>
                                                </div>
                                                <div class="wallet-stats-graph-single-inner">
                                                    <div class="wallet-stats-graph-single-main">
                                                        <div class="wallet-stats-graph-list custom-border custom-card clasic-shadow">
                                                            <div class="wallet-stats-graph-list-box">
                                                                <div class="wallet-stats-graph-list-title custom-padding">
                                                                    <div class="wallet-stats-graph-list-title-text">
                                                                        Ambassador
                                                                    </div>
                                                                    <div class="text-badge">
                                                                        15
                                                                    </div>
                                                                </div>
                                                                <div class="wallet-stats-graph-list-buttons">
                                                                    <ul class="wallet-stats-graph-list-ul">
                                                                        <li class="wallet-stats-graph-list-li custom-padding active">
                                                                            <div class="wallet-stats-graph-list-li-text">
                                                                                Tier 1
                                                                            </div>
                                                                            <div class="text-badge">
                                                                                10
                                                                            </div>
                                                                        </li>
                                                                        <li class="wallet-stats-graph-list-li custom-padding">
                                                                            <div class="wallet-stats-graph-list-li-text">
                                                                                Tier 2
                                                                            </div>
                                                                            <div class="text-badge">
                                                                                5
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="wallet-stats-graph-list-boxed">
                                                                    <div class="wallet-stats-graph-list-boxed-inner">
                                                                        <div class="wallet-stats-graph-list-boxed-main">
                                                                            <ul class="wallet-stats-graph-list-boxed-ul">
                                                                                <li class="wallet-stats-graph-list-boxed-li custom-padding">
                                                                                    <div class="wallet-stats-graph-list-boxed-li-inner">
                                                                                        <div class="wallet-stats-graph-list-boxed-li-image">
                                                                                            <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-name">
                                                                                            Ambassador Name
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-info  open-popup" data-target=".ambassodar-pop-out-0011">
                                                                                            <span class="icon">
                                                                                                <span class="ti-info-alt"></span>
                                                                                            </span>
                                                                                            <div class="ambassodar-pop-out ambassodar-pop-out-0011 custom-border custom-card clasic-shadow custom-padding">
                                                                                                <div class="ambassodar-pop-out-inner">
                                                                                                    <div class="ambassodar-pop-out-main">
                                                                                                        <div class="ambassodar-pop-out-top">
                                                                                                            <div class="ambassodar-pop-out-image">
                                                                                                                <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                                            </div>
                                                                                                            <div class="ambassodar-pop-out-name">
                                                                                                                <div class="ambassodar-pop-out-name-text">
                                                                                                                    Jane Doe
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-deg-text">
                                                                                                                    Ambassodar
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="ambassodar-pop-out-detail">
                                                                                                            <div class="ambassodar-pop-out-detail-inner">
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Joining Date: </span>
                                                                                                                    <span class="value">18 August 2018 </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">City/State: </span>
                                                                                                                    <span class="value">New York City, NY </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Status Level: </span>
                                                                                                                    <span class="value"> Citizen </span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="wallet-stats-graph-list-boxed-li custom-padding">
                                                                                    <div class="wallet-stats-graph-list-boxed-li-inner">
                                                                                        <div class="wallet-stats-graph-list-boxed-li-image">
                                                                                            <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-name">
                                                                                            Ambassador Name
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-info  open-popup" data-target=".ambassodar-pop-out-0012">
                                                                                            <span class="icon">
                                                                                                <span class="ti-info-alt"></span>
                                                                                            </span>
                                                                                            <div class="ambassodar-pop-out ambassodar-pop-out-0012  custom-border custom-card clasic-shadow custom-padding">
                                                                                                <div class="ambassodar-pop-out-inner">
                                                                                                    <div class="ambassodar-pop-out-main">
                                                                                                        <div class="ambassodar-pop-out-top">
                                                                                                            <div class="ambassodar-pop-out-image">
                                                                                                                <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                                            </div>
                                                                                                            <div class="ambassodar-pop-out-name">
                                                                                                                <div class="ambassodar-pop-out-name-text">
                                                                                                                    Jane Doe
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-deg-text">
                                                                                                                    Ambassodar
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="ambassodar-pop-out-detail">
                                                                                                            <div class="ambassodar-pop-out-detail-inner">
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Joining Date: </span>
                                                                                                                    <span class="value">18 August 2018 </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">City/State: </span>
                                                                                                                    <span class="value">New York City, NY </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Status Level: </span>
                                                                                                                    <span class="value"> Citizen </span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="wallet-stats-graph-list-boxed-li custom-padding">
                                                                                    <div class="wallet-stats-graph-list-boxed-li-inner">
                                                                                        <div class="wallet-stats-graph-list-boxed-li-image">
                                                                                            <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-name">
                                                                                            Ambassador Name
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-info  open-popup" data-target=".ambassodar-pop-out-0013">
                                                                                            <span class="icon">
                                                                                                <span class="ti-info-alt"></span>
                                                                                            </span>
                                                                                            <div class="ambassodar-pop-out ambassodar-pop-out-0013  custom-border custom-card clasic-shadow custom-padding">
                                                                                                <div class="ambassodar-pop-out-inner">
                                                                                                    <div class="ambassodar-pop-out-main">
                                                                                                        <div class="ambassodar-pop-out-top">
                                                                                                            <div class="ambassodar-pop-out-image">
                                                                                                                <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                                            </div>
                                                                                                            <div class="ambassodar-pop-out-name">
                                                                                                                <div class="ambassodar-pop-out-name-text">
                                                                                                                    Jane Doe
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-deg-text">
                                                                                                                    Ambassodar
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="ambassodar-pop-out-detail">
                                                                                                            <div class="ambassodar-pop-out-detail-inner">
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Joining Date: </span>
                                                                                                                    <span class="value">18 August 2018 </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">City/State: </span>
                                                                                                                    <span class="value">New York City, NY </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Status Level: </span>
                                                                                                                    <span class="value"> Citizen </span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="wallet-stats-graph-list-boxed-li custom-padding">
                                                                                    <div class="wallet-stats-graph-list-boxed-li-inner">
                                                                                        <div class="wallet-stats-graph-list-boxed-li-image">
                                                                                            <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-name">
                                                                                            Ambassador Name
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-info  open-popup" data-target=".ambassodar-pop-out-0011">
                                                                                            <span class="icon">
                                                                                                <span class="ti-info-alt"></span>
                                                                                            </span>
                                                                                            <div class="ambassodar-pop-out  custom-border custom-card clasic-shadow custom-padding">
                                                                                                <div class="ambassodar-pop-out-inner">
                                                                                                    <div class="ambassodar-pop-out-main">
                                                                                                        <div class="ambassodar-pop-out-top">
                                                                                                            <div class="ambassodar-pop-out-image">
                                                                                                                <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                                            </div>
                                                                                                            <div class="ambassodar-pop-out-name">
                                                                                                                <div class="ambassodar-pop-out-name-text">
                                                                                                                    Jane Doe
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-deg-text">
                                                                                                                    Ambassodar
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="ambassodar-pop-out-detail">
                                                                                                            <div class="ambassodar-pop-out-detail-inner">
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Joining Date: </span>
                                                                                                                    <span class="value">18 August 2018 </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">City/State: </span>
                                                                                                                    <span class="value">New York City, NY </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Status Level: </span>
                                                                                                                    <span class="value"> Citizen </span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wallet-stats-graph-single">
                                                <div class="stats-graph   custom-card custom-border custom-padding clasic-shadow">
                                                    <div class="stats-graph-title">
                                                        Merchant Stats
                                                    </div>
                                                    <canvas id="merchant-canvas" width="400" height="400"></canvas>
                                                </div>
                                                <div class="wallet-stats-graph-single-inner">
                                                    <div class="wallet-stats-graph-single-main">
                                                        <div class="wallet-stats-graph-list custom-border custom-card clasic-shadow">
                                                            <div class="wallet-stats-graph-list-box">
                                                                <div class="wallet-stats-graph-list-title custom-padding">
                                                                    <div class="wallet-stats-graph-list-title-text">
                                                                        Merchant
                                                                    </div>
                                                                    <div class="text-badge">
                                                                        15
                                                                    </div>
                                                                </div>
                                                                <div class="wallet-stats-graph-list-buttons">
                                                                    <ul class="wallet-stats-graph-list-ul">
                                                                        <li class="wallet-stats-graph-list-li custom-padding active">
                                                                            <div class="wallet-stats-graph-list-li-text">
                                                                                Level 1
                                                                            </div>
                                                                            <div class="text-badge">
                                                                                5
                                                                            </div>
                                                                        </li>
                                                                        <li class="wallet-stats-graph-list-li custom-padding">
                                                                            <div class="wallet-stats-graph-list-li-text">
                                                                                Level 2
                                                                            </div>
                                                                            <div class="text-badge">
                                                                                5
                                                                            </div>
                                                                        </li>
                                                                        <li class="wallet-stats-graph-list-li custom-padding">
                                                                            <div class="wallet-stats-graph-list-li-text">
                                                                                Level 3
                                                                            </div>
                                                                            <div class="text-badge">
                                                                                5
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="wallet-stats-graph-list-boxed">
                                                                    <div class="wallet-stats-graph-list-boxed-inner">
                                                                        <div class="wallet-stats-graph-list-boxed-main">
                                                                            <ul class="wallet-stats-graph-list-boxed-ul">
                                                                                <li class="wallet-stats-graph-list-boxed-li custom-padding">
                                                                                    <div class="wallet-stats-graph-list-boxed-li-inner">
                                                                                        <div class="wallet-stats-graph-list-boxed-li-image">
                                                                                            <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-name">
                                                                                            Ambassador Name
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-info">
                                                                                            <span class="icon">
                                                                                                <span class="ti-info-alt"></span>
                                                                                            </span>
                                                                                            <div class="ambassodar-pop-out custom-border custom-card clasic-shadow custom-padding">
                                                                                                <div class="ambassodar-pop-out-inner">
                                                                                                    <div class="ambassodar-pop-out-main">
                                                                                                        <div class="ambassodar-pop-out-top">
                                                                                                            <div class="ambassodar-pop-out-image">
                                                                                                                <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                                            </div>
                                                                                                            <div class="ambassodar-pop-out-name">
                                                                                                                <div class="ambassodar-pop-out-name-text">
                                                                                                                    Jane Doe
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-deg-text">
                                                                                                                    Ambassodar
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="ambassodar-pop-out-detail">
                                                                                                            <div class="ambassodar-pop-out-detail-inner">
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Joining Date: </span>
                                                                                                                    <span class="value">18 August 2018 </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">City/State: </span>
                                                                                                                    <span class="value">New York City, NY </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Status Level: </span>
                                                                                                                    <span class="value"> Citizen </span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="wallet-stats-graph-list-boxed-li custom-padding">
                                                                                    <div class="wallet-stats-graph-list-boxed-li-inner">
                                                                                        <div class="wallet-stats-graph-list-boxed-li-image">
                                                                                            <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-name">
                                                                                            Ambassador Name
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-info open-popup" data-target=".ambassodar-pop-out-001">
                                                                                            <span class="icon">
                                                                                                <span class="ti-info-alt"></span>
                                                                                            </span>
                                                                                            <div class="ambassodar-pop-out ambassodar-pop-out-001">
                                                                                                <div class="ambassodar-pop-out-inner">
                                                                                                    <div class="ambassodar-pop-out-main">
                                                                                                        <div class="ambassodar-pop-out-top">
                                                                                                            <div class="ambassodar-pop-out-image">
                                                                                                                <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                                            </div>
                                                                                                            <div class="ambassodar-pop-out-name">
                                                                                                                <div class="ambassodar-pop-out-name-text">
                                                                                                                    Jane Doe
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-deg-text">
                                                                                                                    Ambassodar
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="ambassodar-pop-out-detail">
                                                                                                            <div class="ambassodar-pop-out-detail-inner">
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Joining Date: </span>
                                                                                                                    <span class="value">18 August 2018 </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">City/State: </span>
                                                                                                                    <span class="value">New York City, NY </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Status Level: </span>
                                                                                                                    <span class="value"> Citizen </span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="wallet-stats-graph-list-boxed-li custom-padding">
                                                                                    <div class="wallet-stats-graph-list-boxed-li-inner">
                                                                                        <div class="wallet-stats-graph-list-boxed-li-image">
                                                                                            <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-name">
                                                                                            Ambassador Name
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-info">
                                                                                            <span class="icon">
                                                                                                <span class="ti-info-alt"></span>
                                                                                            </span>
                                                                                            <div class="ambassodar-pop-out  custom-border custom-card clasic-shadow custom-padding">
                                                                                                <div class="ambassodar-pop-out-inner">
                                                                                                    <div class="ambassodar-pop-out-main">
                                                                                                        <div class="ambassodar-pop-out-top">
                                                                                                            <div class="ambassodar-pop-out-image">
                                                                                                                <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                                            </div>
                                                                                                            <div class="ambassodar-pop-out-name">
                                                                                                                <div class="ambassodar-pop-out-name-text">
                                                                                                                    Jane Doe
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-deg-text">
                                                                                                                    Ambassodar
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="ambassodar-pop-out-detail">
                                                                                                            <div class="ambassodar-pop-out-detail-inner">
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Joining Date: </span>
                                                                                                                    <span class="value">18 August 2018 </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">City/State: </span>
                                                                                                                    <span class="value">New York City, NY </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Status Level: </span>
                                                                                                                    <span class="value"> Citizen </span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="wallet-stats-graph-list-boxed-li custom-padding">
                                                                                    <div class="wallet-stats-graph-list-boxed-li-inner">
                                                                                        <div class="wallet-stats-graph-list-boxed-li-image">
                                                                                            <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-name">
                                                                                            Ambassador Name
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-info">
                                                                                            <span class="icon">
                                                                                                <span class="ti-info-alt"></span>
                                                                                            </span>
                                                                                            <div class="ambassodar-pop-out  custom-border custom-card clasic-shadow custom-padding">
                                                                                                <div class="ambassodar-pop-out-inner">
                                                                                                    <div class="ambassodar-pop-out-main">
                                                                                                        <div class="ambassodar-pop-out-top">
                                                                                                            <div class="ambassodar-pop-out-image">
                                                                                                                <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                                            </div>
                                                                                                            <div class="ambassodar-pop-out-name">
                                                                                                                <div class="ambassodar-pop-out-name-text">
                                                                                                                    Jane Doe
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-deg-text">
                                                                                                                    Ambassodar
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="ambassodar-pop-out-detail">
                                                                                                            <div class="ambassodar-pop-out-detail-inner">
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Joining Date: </span>
                                                                                                                    <span class="value">18 August 2018 </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">City/State: </span>
                                                                                                                    <span class="value">New York City, NY </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Status Level: </span>
                                                                                                                    <span class="value"> Citizen </span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="wallet-stats-graph-list-boxed-li custom-padding">
                                                                                    <div class="wallet-stats-graph-list-boxed-li-inner">
                                                                                        <div class="wallet-stats-graph-list-boxed-li-image">
                                                                                            <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-name">
                                                                                            Ambassador Name
                                                                                        </div>
                                                                                        <div class="wallet-stats-graph-list-boxed-li-info">
                                                                                            <span class="icon">
                                                                                                <span class="ti-info-alt"></span>
                                                                                            </span>
                                                                                            <div class="ambassodar-pop-out  custom-border custom-card clasic-shadow custom-padding">
                                                                                                <div class="ambassodar-pop-out-inner">
                                                                                                    <div class="ambassodar-pop-out-main">
                                                                                                        <div class="ambassodar-pop-out-top">
                                                                                                            <div class="ambassodar-pop-out-image">
                                                                                                                <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                                                                                            </div>
                                                                                                            <div class="ambassodar-pop-out-name">
                                                                                                                <div class="ambassodar-pop-out-name-text">
                                                                                                                    Jane Doe
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-deg-text">
                                                                                                                    Ambassodar
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="ambassodar-pop-out-detail">
                                                                                                            <div class="ambassodar-pop-out-detail-inner">
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Joining Date: </span>
                                                                                                                    <span class="value">18 August 2018 </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">City/State: </span>
                                                                                                                    <span class="value">New York City, NY </span>
                                                                                                                </div>
                                                                                                                <div class="ambassodar-pop-out-detail-row">
                                                                                                                    <span class="heading">Status Level: </span>
                                                                                                                    <span class="value"> Citizen </span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
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
                    </div>
                </div>
            </div>

    @push('scripts')  
<script src="{{url('index.js')}}"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>

    <script>
        $(function () {
            $(document).on('submit', '#kyc-form', function (e) { 
                e.preventDefault();
                var button=$(this).find('button[type=submit]');
                var method = 'POST';
                var previous= button.text();
                button.attr('disabled','disabled').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing ...');

                $.ajax({
                    type:method,
                    url:'{{route('kyc.submit')}}',
                    type:'POST',
                    data: new FormData(this),
                    dataType:'JSON', 
                    processData: false,
                    contentType: false,
                    cache: false,
                    success:function(data) {
                        button.attr('disabled',null).html(previous);
                        swal("Success!", data.success, "success").then(function () {
                        });
                    },
                    error:function (xhr) {
                        button.attr('disabled',null).html(previous);
                        erroralert(xhr);
                    }
                });

            });
        });

       
    </script>

<script>
    $(document).ready(function () {
    $('#wallet-stats').DataTable();
});

var ctx = document.getElementById('ambassador-canvas').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Personalized Network - Tier 1', 'Extended Network - Tier 2'],
        datasets: [{
            label: '# of Votes',
            data: [10, 5],
            backgroundColor: [
                'rgba(237, 125, 49, 1)',
                'rgba(91, 155, 213, 1)'
            ],
            borderColor: [
                'rgba(255, 255, 255, 1)',
                'rgba(255, 255, 235, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var ctx = document.getElementById('merchant-canvas').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Level 1', 'Level 2','Level 3'],
        datasets: [{
            label: '# of Votes',
            data: [10,5,5],
            backgroundColor: [
                'rgba(237, 125, 49, 1)',
                'rgba(91, 155, 213, 1)',
                'rgba(165, 165, 165, 1)'
            ],
            borderColor: [
                'rgba(255, 255, 255, 1)',
                'rgba(255, 255, 255, 1)',
                'rgba(255, 255, 235, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

$(".open-popup").click(function(){
    var target_popup = $(this).attr('data-target');
    $(target_popup).show();
});

$(document).on('click','.open-filter',function(){
    $('.filter-dropdown').show();
    $(".filter-icon").removeClass('open-filter').addClass('close-filter');
    $(".filter-icon .icon").html('<span class="ti-close"></span>');
});

$(document).on('click','.close-filter',function(){
    console.log('jj')
    $('.filter-dropdown').hide();
    $(".filter-icon").removeClass('close-filter').addClass('open-filter');
    $(".filter-icon .icon").html('<span class="ti-filter"></span>');
});
</script>
    
    @endpush
@endsection