@extends('ambassador.kyc.layouts.app')
@section('title')
    Wallet Transactions
@endsection
@section('content')
    <link rel="stylesheet" href="{{url('ambassador_assets/css/wallet.css')}}">
    <div class="wallet-dashboad">
        <div class="wallet-dashboad-inner">
            <div class="container">
                <div class="wallet-dashboad-main">
                    <div class="wallet-dashboad-main-inner">
                        <div class="dahboard-title">
                            Dashboard
                        </div>
                        <div class="dashboard-sides">
                            <div class="dashboard-side-bar">
                                <div class="dahboard-cards custom-flex-01">
                                    <div class="dahboard-card custom-width-50">
                                        <div class="dahboard-card-inner custom-card custom-border custom-shadow">
                                            <div class="dahboard-card-title-bar custom-padding multi">
                                                <div class="text">
                                                    Coin Value
                                                </div>
                                                <div class="statics">
                                                    <div class="up">
                                                        <div class="text number-text">
                                                            45.0321
                                                        </div>
                                                        <div class="icon">
                                                            <span class="ti-arrow-up"></span>
                                                        </div>
                                                    </div>
                                                    <div class="down">
                                                        <div class="text number-text">
                                                            45.0321
                                                        </div>
                                                        <div class="icon">
                                                            <span class="ti-arrow-down"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dasboard-card-content">
                                                <div class="dasboard-card-content-inner custom-padding text-center">
                                                    <span class="gold-text number-text">$11.2654</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dahboard-card custom-width-50">
                                        <div class="dahboard-card-inner custom-card custom-border custom-shadow">
                                            <div class="dahboard-card-title-bar custom-padding multi">
                                                <div class="text">
                                                    Balance
                                                </div>
                                                <div class="statics">
                                                    <div class="up">
                                                        <div class="text number-text">
                                                            45.0321
                                                        </div>
                                                        <div class="icon">
                                                            <span class="ti-arrow-up"></span>
                                                        </div>
                                                    </div>
                                                    <div class="down">
                                                        <div class="text number-text">
                                                            45.0321
                                                        </div>
                                                        <div class="icon">
                                                            <span class="ti-arrow-down"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dasboard-card-content">
                                                <div class="dasboard-card-content-inner custom-padding text-center">
                                                    <span class="black-text number-text">$88,761.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table Side -->
                            <div class="dashboard-content-main">
                                <div class="dashboard-content-main-inner">
                                    <div class="dashboard-card">
                                        <div class="dahboard-card">
                                            <div class="dahboard-card-inner custom-card custom-border custom-shadow">
                                                <div class="dahboard-card-title-bar custom-padding">
                                                    <div class="text">
                                                        Coin Value History
                                                    </div>
                                                </div>
                                                <div class="dasboard-card-content">
                                                    <div class="dasboard-card-content-inner custom-padding">
                                                        <div class="dasboard-card-graph">
                                                            <div class="dasboard-card-graph-inner">
                                                                <div class="dasboard-card-graph-main">
                                                                    <canvas id="history-graph" width="300px"
                                                                            height="100px"></canvas>
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
                                            Recent Transactions
                                        </div>
                                    </div>
                                    <div class="dasboard-card-content">
                                        <div class="dasboard-card-content-inner custom-padding">
                                            <div class="dasboard-card-table">
                                                <div class="dasboard-card-table-inner">
                                                    <div class="dasboard-card-table-main">
                                                        <div class="table-responsive">
                                                            <table class='table'>
                                                                <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Activity</th>
                                                                    <th>Date</th>
                                                                    <th>Amount</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($my_trxs as $my_trx)
                                                                    <tr>
                                                                        <td>{{$my_trx->chartOfAccount->title}}</td>
                                                                        <td>{{$my_trx->journal->narration}}</td>
                                                                        <td>{{$my_trx->created_at->format('d-m-Y')}}</td>
                                                                        <td>
                                                                            @if($my_trx->dr)
                                                                                <span class="debit">+ ${{$my_trx->dr}}</span>
                                                                            @else
                                                                                <span class="credit">- ${{$my_trx->dr}}</span>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
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
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Highest',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: false,
                    borderColor: 'rgba(229, 179, 48, 1)',
                    tension: 0.1
                }, {
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
        </script>

    @endpush
@endsection