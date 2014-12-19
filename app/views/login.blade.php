<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/btracker.css">

	
</head>
<body>

	<div class="container">
		<div class="row">
			@if ($errors->has())
		
			@foreach ($errors->all() as $error)
				{{ $error }}		
			@endforeach
		
			@endif

			<form role="form" action="login" method="POST">
  				<div class="form-group">
    				<label class="control-label" for="email">Email</label>
    				<input type="email" class="form-control" name="email" id="email" placeholder="Enter e-mail">
  				</div>
  				<div class="form-group">
    				<label class="control-label" for="password">Password</label>
    				<input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
  				</div>
  	<button type="submit" class="btn btn-success">Sign In</button>
  	<a href="/"><button type="button" class="btn btn-primary">Sign Up</button></a>

</form>
		</div>
	</div>

	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="js/budget.js"></script>
</body>
</html>