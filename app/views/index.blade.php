<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Budget Tracker</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/btracker.css">

	
</head>
<body>
	<div class="container">
		<div class="row">
			<form role="form" action="/" method="POST">
  				<div class="form-group">
    				<label class="control-label" for="name">Name</label>
    				<input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
  				</div>
  				<div class="form-group passwordmatch">
    				<label class="control-label" for="password">Password</label>
    				<input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
  				</div>
  				<div class="form-group passwordmatch">
    				<label class="control-label" for="confirmpassword">Confirm Password</label>
    				<input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm password">
  				</div>
  				<div class="form-group">
    				<label class="control-label" for="email">Email</label>
    				<input type="email" class="form-control" name="email" id="email" placeholder="Enter e-mail">
  				</div>
 
  	<button type="submit" class="btn btn-default">Sign Up</button>
  	<a href="login"><button type="button" class="btn btn-link">Already A Member?</button></a>
</form>

		@if ($errors->has())
		
			@foreach ($errors->all() as $error)
				{{ $error }}		
			@endforeach
		
			@endif
		</div>
	</div>

	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="js/budget.js"></script>
</body>
</html>