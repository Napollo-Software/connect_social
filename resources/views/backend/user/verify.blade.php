

@if (Session::has('message'))
<div class="alert alert-danger">{{Session::get('message')}}</div>
    
@endif

<div style="padding-left: 100px">
    <form action="/user" method="POST">

        {{ csrf_field() }}
        <input type="text" name="code" placeholder="enter code here">
        <input type="submit" value="Verify">
    </form>
    
</div>
