<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Make A Deposit</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/btracker.css">

	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 deposit-form">
				<h1>Make A Deposit</h1>
				<form action="/deposit" method="POST">
					<input type="text" name="deposit" class="currency">
					<button type="submit" class="btn btn-primary deposit">Deposit</button>
				</form>

				<p>Below is a breakdown of how your deposit will be allotted.</p>

				<h2>NEEDS (50%)</h2>
				<p class="needs"></p>
				<h2>WANTS (30%)</h2>
				<p class="wants"></p>
				<h2>SAVINGS (20%)</h2>
				<p class="savings"></p>

			</div>
		</div>
	</div>

	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="js/budget.js"></script>
</body>
</html>