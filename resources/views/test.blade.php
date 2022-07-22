<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body id="app-layout">
<div class="container">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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

                form.submit();
            }
        })
    </script>
</div>

</body>
</html>