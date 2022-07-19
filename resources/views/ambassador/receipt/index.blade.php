@extends('ambassador.kyc.layouts.app')
@section('title')
    Kyc Submission
@endsection
@section('content')
    <link rel="stylesheet" href="{{url('ambassador_assets/css/wallet.css')}}">
    <div class="wallet-screen-section">
        <div class="wallet-screen-section-main">
            <div class="container">
                <div class="wallet-stats-table">
                    <div class="wallet-stats-table-inner">
                        <div class="wallet-stats-table-title">
                            History
                        </div>
                        <div class="wallet-stats-table-main">
                            <div class="wallet-stats-table-outer table-responsive  custom-card custom-border custom-padding clasic-shadow">
                                <p class="text-danger">As there is no merchant, so I manipulate all users in merchant dropdown.</p>
                                <table id="wallet-stats" class="table">
                                    <thead>
                                    <tr>
                                        <th>Merchant Name</th>
                                        <th>Receipts</th>
                                        <th></th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Coins</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($receipts as $receipt)
                                        <tr>
                                            <td>{{$receipt->merchant_name}}</td>
                                            <td>{{$receipt->merchant_type}}</td>
                                            <td>
                                                <a class="ti-link text-decoration-none text-dark" href="{{Storage::disk('local')->url('/ambassador-receipts/'.$receipt->receipt)}}" target="_blank"></a>
                                            </td>
                                            <td>
                                                @if($receipt->status==AMBASSADOR_RECEIPT::STATUS_REQUESTED)
                                                    REQUESTED
                                                @elseif($receipt->status==AMBASSADOR_RECEIPT::STATUS_APPROVED)
                                                    APPROVED
                                                @else
                                                    REJECTED
                                                @endif

                                            </td>
                                            <td>{{$receipt->created_at->format('d-m-Y')}}</td>
                                            <td>
                                                <span class="debit">+ ${{$receipt->receipt_amount}}</span>
{{--                                                <span class="credit">- ${{$my_trx->dr}}</span>--}}

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @include('ambassador.receipt.create')
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{url('index.js')}}"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>

        <script>

        </script>
    @endpush
@endsection