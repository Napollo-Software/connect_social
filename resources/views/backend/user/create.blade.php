

<div style="padding-left: 100px">
    <form action="/user" method="POST">

        {{ csrf_field() }}
        <input type="text" placeholder="enter number">
        <input type="submit" value="Submit">
    </form>
    
</div>
