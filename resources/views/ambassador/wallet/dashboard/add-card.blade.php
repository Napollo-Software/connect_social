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
                                                                                    <div class="card">
                                                                                        <div class="card-header">{{ __('Checkout page') }}</div>

                                                                                        <div class="card-body">
                                                                                            <form id="payment-form" action=" " method="POST">
                                                                                                @csrf
                                                                                                <input type="hidden" name="plan" id="plan" value="{{ request('plan') }}">
                                                                                                <div class="form-group">
                                                                                                    <label for="">Name</label>
                                                                                                    <input type="text" name="name" id="card-holder-name" class="form-control" value="" placeholder="Name on the card">
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label for="">Card details</label>
                                                                                                    <div id="card-element"></div>
                                                                                                </div>

                                                                                                <button type="submit" class="btn btn-primary w-100" id="card-button" data-secret=" ">Pay</button>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
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
                                    @include('ambassador.wallet.dashboard.update-card')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ env('STRIPE_PUBLISH_KEY') }}');

        const elements = stripe.elements();
        const cardElement = elements.create('card');

        cardElement.mount('#card-element');

        const form = document.getElementById('payment-form');
        const cardBtn = document.getElementById('card-button');
        const cardHolderName = document.getElementById('card-holder-name');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            cardBtn.disabled = true;
            const { setupIntent, error } = await stripe.confirmCardSetup(
                cardBtn.dataset.secret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                }
            );

            if(error) {
                cardBtn.disable = false
            } else {
                let token = document.createElement('input');

                token.setAttribute('type', 'hidden');
                token.setAttribute('name', 'token');
                token.setAttribute('value', setupIntent.payment_method);
                form.appendChild(token);
                console.log(token);

                form.submit();
            }
        })
    </script>
    @push('scripts')
    <script>
        $(function() {
            $(document).on('click','.add-button-span',function () {
                $('.add-card-div').toggle();
            })

            $(document).on('click','.show-card-html',function() {
                var element = $(this).attr('data-class');
                $(element).toggle();
            });

        });
    </script>
    @endpush
@endsection