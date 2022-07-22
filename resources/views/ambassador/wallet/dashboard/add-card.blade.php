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
                                        Dashboard <span class="beadcrumb">/ Payment method</span>
                                    </div>
                                    <div class="add-button">
                                        <div class="add-button-inner">
                                            <div class="add-button-main">
                                                <span class="add-button-span">
                                                    <div class="icon"><span class="ti-plus"></span></div>
                                                    <div class="text">Add new card</div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table Side -->
                            <div class="dashboard-content-main">
                                <div class="dashboard-content-main-inner">
                                    <div class="dashboard-card">
                                        <div class="dahboard-card add-card-div">
                                            <div class="dahboard-card-inner custom-card custom-border custom-shadow">
                                                <div class="dahboard-card-title-bar custom-padding">
                                                    <div class="text">
                                                        Add New Card
                                                    </div>
                                                </div>
                                                <div class="dasboard-card-content">
                                                    <div class="dasboard-card-content-inner custom-padding">
                                                        <div class="dashboard-card-add-card">
                                                            <div class="dashboard-card-add-card-inner">
                                                                <div class="dashboard-card-add-card-main">
                                                                    <!-- <div class="add-card-options">
                                                                        <div class="add-card-options-inner">
                                                                            <ul class="add-card-options-ul">
                                                                                <li class="add-card-options-li">
                                                                                    <label for="check-01">
                                                                                        <input type="radio" name="name-01" id="check-01">
                                                                                        <span class="text">Debit Card</span>
                                                                                    </label>
                                                                                </li>
                                                                                <li class="add-card-options-li">
                                                                                    <label for="check-02">
                                                                                        <input type="radio" name="name-01" id="check-02">
                                                                                        <span class="text">Credit Card</span>
                                                                                    </label>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="add-card-html">
                                                                        <div class="add-card-html-inner">
                                                                            <div class="add-card-html-main">
                                                                                <div class="add-card-html-top-bar">
                                                                                    <div class="title-text">
                                                                                        Add New Card
                                                                                    </div>
                                                                                    <div class="card-type">
                                                                                        <img src="{{asset('ambassador_assets/images/wallet-icons/master-card.svg')}}" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-field-outer">
                                                                                    <div class="card-field-inner">
                                                                                        <div class="card-field-single">
                                                                                            <div class="card-field-single-row">
                                                                                                <div class="card-single-field">
                                                                                                    <label for="field-01">Card Number</label>
                                                                                                    <input type="text" class="card-field-input" placeholder="0000 0000 000 0000">
                                                                                                    <span class='icon'>
                                                                                                        <span class="ti-credit-card"></span>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card-field-single-row rows">
                                                                                                <div class="card-single-field mr-2">
                                                                                                    <label for="field-01">Expiry Date</label>
                                                                                                    <input type="text" class="card-field-input" placeholder="MM/YY">
                                                                                                    <span class='icon'>
                                                                                                        <span class="ti-calendar"></span>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <div class="card-single-field">
                                                                                                    <label for="field-01">CVC/CV</label>
                                                                                                    <input type="text" class="card-field-input" placeholder="...">
                                                                                                    <span class='icon'>
                                                                                                        <span class="ti-info-alt"></span>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card-field-single-row">
                                                                                                <div class="card-single-field">
                                                                                                    <label for="field-01">Card Holder Name</label>
                                                                                                    <input type="text" class="card-field-input" placeholder="Enter Card Holder's Full Name">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="add-card-action">
                                                                        <div class="add-card-action-inner">
                                                                            <div class="add-card-toptext-title">
                                                                                <div class="text">
                                                                                    We Accept
                                                                                </div>
                                                                                <div class="all-cards">
                                                                                    <div class="all-cards-grid">
                                                                                        <div class="single-card-icon">
                                                                                            <img src="{{asset('ambassador_assets/images/wallet-icons/master-card.svg')}}" alt="">
                                                                                        </div>
                                                                                        <div class="single-card-icon">
                                                                                            <img src="{{asset('ambassador_assets/images/wallet-icons/visa.png')}}" alt="">
                                                                                        </div>
                                                                                        <div class="single-card-icon">
                                                                                            <img src="{{asset('ambassador_assets/images/wallet-icons/amex.png')}}" alt="">
                                                                                        </div>
                                                                                        <div class="single-card-icon">
                                                                                            <img src="{{asset('ambassador_assets/images/wallet-icons/unionpay.png')}}" alt="">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="add-card-bottom-text">
                                                                                <div class="text">
                                                                                    Terms & Conditions
                                                                                </div>
                                                                                <div class="pera">
                                                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga odio</p>
                                                                                </div>
                                                                                <div class="agree">
                                                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad est minus nihil dolore voluptatum dolor voluptas, adipisci maxime, repellendus quae minima? Totam ea ipsa nulla deleniti consectetur vel, quibusdam quo.</p>
                                                                                </div>
                                                                                <div class="agree-check">
                                                                                    <label for="chec-0" class='label-flex'>
                                                                                        <input type="checkbox" id="chec-0">
                                                                                        <div class="text">
                                                                                            I Agree!
                                                                                        </div>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="add-button-div">
                                                                                <button class="black-button no-border">
                                                                                    Save
                                                                                </button>
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
                                    <div class="dashboard-card">
                                        <div class="dahboard-card">
                                            <div class="dahboard-card-inner custom-card custom-border custom-shadow">
                                                <div class="dahboard-card-title-bar custom-padding">
                                                    <div class="text">
                                                        Existing Accounts
                                                    </div>
                                                </div>
                                                <div class="dasboard-card-content">
                                                    <div class="dasboard-card-content-inner custom-padding">
                                                        <div class="existing-card-grid">
                                                            <div class="existing-card-grid-inner">
                                                                <div class="existing-card-col">
                                                                    <div class="existing-card-col-inner">
                                                                        <div class="slected-option">
                                                                            <div class="slected-option-inner">
                                                                                <input type="radio" name="ex-card">
                                                                            </div>
                                                                        </div>
                                                                        <div class="add-card-html">
                                                                            <div class="add-card-html-inner">
                                                                                <div class="add-card-html-main">
                                                                                    <div class="add-card-html-top-bar end">
                                                                                        <div class="card-type">
                                                                                            <img src="{{asset('ambassador_assets/images/wallet-icons/master-card.svg')}}" alt="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="card-field-outer">
                                                                                        <div class="card-field-inner">
                                                                                            <div class="card-field-single">
                                                                                                <div class="card-field-single-row">
                                                                                                    <div class="card-single-field">
                                                                                                        <label for="field-01">Card Number</label>
                                                                                                        <input type="text" class="card-field-input" placeholder="0000 0000 000 0000">
                                                                                                        <span class='icon'>
                                                                                                            <span class="ti-credit-card"></span>
                                                                                                        </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="card-field-single-row rows">
                                                                                                    <div class="card-single-field mr-2">
                                                                                                        <label for="field-01">Expiry Date</label>
                                                                                                        <input type="text" class="card-field-input" placeholder="MM/YY">
                                                                                                        <span class='icon'>
                                                                                                            <span class="ti-calendar"></span>
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    <div class="card-single-field">
                                                                                                        <label for="field-01">CVC/CV</label>
                                                                                                        <input type="text" class="card-field-input" placeholder="...">
                                                                                                        <span class='icon'>
                                                                                                            <span class="ti-info-alt"></span>
                                                                                                        </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="card-field-single-row">
                                                                                                    <div class="card-single-field">
                                                                                                        <label for="field-01">Card Holder Name</label>
                                                                                                        <input type="text" class="card-field-input" placeholder="Enter Card Holder's Full Name">
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
            $(document).ready(function () {
                $('#history-table').DataTable();
            });

            var ctx = document.getElementById('history-graph').getContext('2d');
            const data = {
                    labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul'],
                    datasets: [{
                        label: 'Highest',
                        data: [65, 59, 80, 81, 56, 55, 40],
                        fill: false,
                        borderColor: 'rgba(229, 179, 48, 1)',
                        tension: 0.1
                },{
                        label: 'Lowest',
                        data: [15, 29, 40, 31, 16, 35, 30],
                        fill: false,
                        borderColor: 'rgba(0, 0, 0, 1)',
                        tension: 0.1
                }]
            };
            var myChart = new Chart(ctx, {
                type: 'line',
                data: data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            $(".open-popup").click(function () {
                var target_popup = $(this).attr('data-target');
                $(target_popup).show();
            });

            $(document).on('click', '.open-filter', function () {
                $('.filter-dropdown').show();
                $(".filter-icon").removeClass('open-filter').addClass('close-filter');
                $(".filter-icon .icon").html('<span class="ti-close"></span>');
            });

            $(document).on('click', '.close-filter', function () {
                console.log('jj')
                $('.filter-dropdown').hide();
                $(".filter-icon").removeClass('close-filter').addClass('open-filter');
                $(".filter-icon .icon").html('<span class="ti-filter"></span>');
            });

            $(document).on('click','.add-button-span',function () {
                $('.add-card-div').show();
            })
        </script>

    @endpush
@endsection