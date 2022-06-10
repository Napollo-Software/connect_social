<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4" style="margin-top:30px; ">
			<h4>Registration</h4>
			<hr>
			<form action="{{route('register-user')}}" method="post">
				@if(Session::has('success'))
				<div class="alert alert-success">{{Session::get('success')}}</div>
				@endif
				@if(Session::has('fail'))
				<div class="alert alert-danger">{{Session::get('fail')}}</div>
				@endif				
				@csrf
				<div class="form-group" style="margin-bottom:20px;">
					<label for="names">Full Name</label>
					<input type="text" class="form-control" name="name" placeholder="Full Name here" value="{{old('name')}}">
					<span class="text-danger">@error('name'){{$message}} @enderror</span>
				</div>
				<div class="form-group" style="margin-bottom:20px;">
					<label for="names">Email</label>
					<input type="email" class="form-control" name="email" placeholder="Your Email here" value="{{old('email')}}">
					<span class="text-danger">@error('email'){{$message}} @enderror</span>
				</div>
				<div class="form-group" style="margin-bottom:20px;">
					<label for="names">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password" value="">
					<span class="text-danger">@error('password'){{$message}} @enderror</span>
				</div>
				<div class="form-group">
					<button class="btn btn-block btn-primary" type="submit">Register</button>
				</div>
				<br>
				<a href="login">Already Registerted? Login</a>			
			</form>
		</div>
	</div>
</div>

</body>
</html>