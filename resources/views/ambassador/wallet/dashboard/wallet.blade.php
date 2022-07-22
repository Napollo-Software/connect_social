@extends('ambassador.kyc.layouts.app')
@section('title')
    Wallet Transactions
@endsection
@section('content')
    @php use App\Models\Coin; @endphp

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
                                                    <div class="{{Coin::differenceFromCurrent()>=0?'up':'down'}}">
                                                        <div class="text number-text">
                                                            ${{Coin::differenceFromCurrent()}}
                                                        </div>
                                                        <div class="icon">
                                                            <span class="ti-arrow-{{Coin::differenceFromCurrent()>=0?'up':'down'}}"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dasboard-card-content">
                                                <div class="dasboard-card-content-inner custom-padding text-center">
                                                    <span class="gold-text number-text">${{Coin::CurrentValue()}}</span>
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
                                                    <div class="{{(Coin::differenceFromCurrent()*Coin::balanceOfCurrentUser())>=0?'up':'down'}}">
                                                        <div class="text number-text">
                                                            ${{Coin::differenceFromCurrent()*Coin::balanceOfCurrentUser()}}
                                                        </div>
                                                        <div class="icon">
                                                            <span class="ti-arrow-{{(Coin::differenceFromCurrent()*Coin::balanceOfCurrentUser())>=0?'up':'down'}}"></span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="dasboard-card-content">
                                                <div class="dasboard-card-content-inner custom-padding text-center">
                                                    <span class="black-text number-text">
                                                        {{Coin::balanceOfCurrentUser()}}
                                                        Coins ≈ ${{Coin::CurrentValue()*Coin::balanceOfCurrentUser()}} </span>
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
                                                            <a href="" class="float-right black-button">Show all transactions</a>
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
            var labels=[
              @foreach($coins as $coin)
                '{{$coin->created_at->format('d M, y')}}',
              @endforeach
            ];
            var datum =[
                @foreach($coins as $coin)
                    '{{$coin->dollar}}',
                @endforeach
            ];
            var ctx = document.getElementById('history-graph').getContext('2d');
            const data = {
                labels: labels,
                datasets: [{
                    label: 'Coin history',
                    data: datum,
                    fill: false,
                    borderColor: 'rgba(229, 179, 48, 1)',
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