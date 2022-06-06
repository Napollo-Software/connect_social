<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Connect Social</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="icon" type="image/x-icon" href="{{ asset('img/coin.png') }}">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4" style="margin-top:30px; ">
			<h4>Welcome to your dashbaord!</h4>
			<hr>
			<table class="table">
				<thead>
					<th>Name</th>
					<th>Email</th>
					<th>Action</th>
				</thead>
				<tbody>
					<tr>
						<td>{{$data->name}}</td>
						<td>{{$data->email}}</td>
						<td><a href="logout">Logout</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

</body>
</html>