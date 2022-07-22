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
                    @if (count($errors) > 0)
                        <div class = "alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <form id="payment-form" action="{{route('order-post')}} " method="POST">
                            @csrf



                            <div class="form-group">
                                <label for="card_number">card_number</label>
                                <input type="text" name="card_number" id="card_number" class="form-control" value="4242424242424242" placeholder="card_number">
                            </div>
                            <div class="form-group">
                                <label for="expiration_year">expiration_year</label>
                                <input type="text" name="expiration_year" id="expiration_year" class="form-control" value="23" placeholder="expiration_year">
                            </div>
                            <div class="form-group">
                                <label for="expiration_month">expiration_month</label>
                                <input type="text" name="expiration_month" id="expiration_month" class="form-control" value="12" placeholder="expiration_month">
                            </div>
                            <div class="form-group">
                                <label for="cvc">cvc</label>
                                <input type="text" name="cvc" id="cvc" class="form-control" value="12345" placeholder="cvc">
                            </div>
                            <button type="submit">Pay</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    function cardType(number){
        var re = new RegExp("^4");
        if (number.match(re) != null)
            return "Visa";

        // Mastercard
        // Updated for Mastercard 2017 BINs expansion
        if (/^(5[1-5][0-9]{14}|2(22[1-9][0-9]{12}|2[3-9][0-9]{13}|[3-6][0-9]{14}|7[0-1][0-9]{13}|720[0-9]{12}))$/.test(number))
            return "Mastercard";

        // AMEX
        re = new RegExp("^3[47]");
        if (number.match(re) != null)
            return "AMEX";

        // Discover
        re = new RegExp("^(6011|622(12[6-9]|1[3-9][0-9]|[2-8][0-9]{2}|9[0-1][0-9]|92[0-5]|64[4-9])|65)");
        if (number.match(re) != null)
            return "Discover";

        // Diners
        re = new RegExp("^36");
        if (number.match(re) != null)
            return "Diners";

        // Diners - Carte Blanche
        re = new RegExp("^30[0-5]");
        if (number.match(re) != null)
            return "Diners - Carte Blanche";

        // JCB
        re = new RegExp("^35(2[89]|[3-8][0-9])");
        if (number.match(re) != null)
            return "JCB";

        // Visa Electron
        re = new RegExp("^(4026|417500|4508|4844|491(3|7))");
        if (number.match(re) != null)
            return "Visa Electron";

        return false;
    }
    $(function () {


        $(document).on('submit','#payment-form',function (e) {


            e.preventDefault();

            var number=$('#card_number').val();
            console.log(cardType(number));
            return false;

















            var route = '{{route('order-post')}}';
            var data = new FormData(this);
            $.ajax({
                url: route,
                type: "POST",
                data: data,
                dataType: "JSON",
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    console.log(data);
                },
                error:function (xhr) {
                    console.log(xhr);
                }
            });
        })
    });
</script>
</body>
</html>