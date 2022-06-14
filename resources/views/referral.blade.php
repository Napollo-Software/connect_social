
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <script src="{{url('js/jquery.slim.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>

</head>
<body class="container-fluid px-0">
<div class="d-flex align-items-center" style="height: 100vh" >
    <div class="log1-inner-1 text-center col-md-12 p-0">
        <h3>Referral Link</h3>
        <h4 class="bg-light" style="padding: 100px 0"><a id="sign-up" class="">{{url('referral-link/'.$name.'/'.$id)}}</a></h4>
    </div>

    <form action="{{route('join.as')}}" id="submit-sign-up" method="post">
        @csrf
        <input type="hidden" value="{{$id}}" name="referer">
    </form>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
    $(function () {
        $('#sign-up').click(function (e) {
            e.preventDefault();
            $('#submit-sign-up').submit();
        });
    });
</script>

</body>
</html>
