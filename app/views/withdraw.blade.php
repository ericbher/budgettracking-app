<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Expenses</title>

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
      <ul class="nav navbar-nav">
        <li><a href="dashboard">Dashboard</a></li>
        <li><a href="deposit">Deposit</a></li>
        <li class="active"><a href="withdrawal">Withdraw<span class="sr-only">(current)</span></a></li>
       
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
				<h1>Expenses</h1>
				<p>Choose which category you want to log the expense from</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 needs-btn">
				<div class="front">
					<h2>Needs</h2>
					<img src = "images/needsicon.png" />
				</div>
				<div class="back">
					<h2>Needs</h2>
					<form action="withdrawal" method='POST'>
						<label for="amount">Amount</label>
						<input type="text" name="amount"><br/>
						<label for="description">Description</label>
						<input type="text" name="description">
						<input type="hidden" name="category" value='needs' />
						<input type="submit" value="Withdraw" />
					</form>
					<img src="images/flipover.png" class="flipover" />
				</div>
			</div>



			<div class="col-md-4 wants-btn">
				<div class="front">
					<h2>Wants</h2>
					<img src = "images/wantsicon.png" />
				</div>
				<div class="back">
					<h2>Wants</h2>
					<form action="withdrawal" method='POST'>
						<label for="amount">Amount</label>
						<input type="text" name="amount"><br/>
						<label for="description">Description</label>
						<input type="text" name="description">
						<input type="hidden" name="category" value='wants' />
						<input type="submit" value="Withdraw" />
					</form>
					<img src="images/flipover.png" class="flipover" />
				</div>
			</div>


			<div class="col-md-4 savings-btn">
				<div class="front">
					<h2>Savings</h2>
					<img src = "images/savingsicon.png" />	
				</div>
				<div class="back">
					<h2>Savings</h2>
					<form action="withdrawal" method='POST'>
						<label for="amount">Amount</label>
						<input type="text" name="amount"><br/>
						<label for="description">Description</label>
						<input type="text" name="description">
						<input type="hidden" name="category" value='savings' />
						<input type="submit" value="Withdraw" />
					</form>
					<img src="images/flipover.png" class="flipover" />
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4 description">
				<p>Needs generally include expenses such as rent/mortgage payments, utilities, groceries, and insurance.</p>
			</div>
		</div>
	</div>

	
	<!-- Latest compiled and minified JavaScript -->

	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="js/jquery.flip.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/budget.js"></script>
	
</body>
</html>