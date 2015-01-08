<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Piggy Bank | Deposit</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<link href='http://fonts.googleapis.com/css?family=Numans' rel='stylesheet' type='text/css'>
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
      <ul class="nav navbar-nav">
        <li><a href="dashboard">Dashboard</a></li>
        <li class="active"><a href="deposit">Deposit<span class="sr-only">(current)</span></a></li>
        <li><a href="withdrawal">Withdraw</a></li>
       
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 deposit-form">
				<h1>Make A Deposit</h1>
				<p>When you make a deposit, the amount is automatically allotted into the appropriate budget category.</p>
				<form action="/deposit" method="POST">
					<input type="text" name="deposit" class="currency">
					<button type="submit" class="btn btn-primary deposit">Deposit</button>
				</form>

				
				<p class="error"></p>

				<h2 class="divide">NEEDS (50%)</h2>
				<p class="needs"></p>
				<h2 class="divide">WANTS (30%)</h2>
				<p class="wants"></p>
				<h2 class="divide">SAVINGS (20%)</h2>
				<p class="savings"></p>

			</div>
		</div>
	</div>

	
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/d3.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="js/budget.js"></script>
</body>
</html>