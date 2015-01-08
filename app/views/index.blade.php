<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Piggy Bank</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/btracker.css">

	
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dashboard">Piggy Bank</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login">Sign In</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div class="container">
		<div class="jumbotron">
			<h1>Piggy Bank</h1>

			<p id="summary">Welcome to the development version of my app Piggy Bank. Piggy Bank is a budget tracker tool. It utilizes a data-driven
			visual dashboard interface which will allow you to keep track of your spending habits and uses the 50/30/20 
			budget allottment rule. Start by creating a profile below.</p>

			
		</div>
		<div class="row">
			<p>
			@if ($errors->has())
		
			@foreach ($errors->all() as $error)
				{{ $error }}		
			@endforeach
		
			@endif
			</p>
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