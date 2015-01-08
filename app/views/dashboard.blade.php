

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Piggy Bank | {{ $name }}</title>

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
        <li class="active"><a href="dashboard">Dashboard <span class="sr-only">(current)</span></a></li>
        <li><a href="deposit">Deposit</a></li>
        <li><a href="withdrawal">Withdraw</a></li>
        <li><a href="transfer">Transfer</a></li>
       
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="container">
		<div class="row">
			<h1 class="welcome">Welcome {{ $name }}!</h1>
    </div>
    <div class="row-fluid">
      <div class="col-md-8 balancepanel">
			    <h2>Current Balance: ${{ $total }}</h2>
          <div class="col-md-3 category">
            <h4>Needs</h4>
            <p class="category-amounts">${{ $needs }}</p>
          </div>
          <div class="col-md-3 category">
            <h4>Wants</h4>
            <p class="category-amounts">${{ $wants }}</p>
          </div>
          <div class="col-md-3 category">
            <h4>Savings</h4>
            <p class="category-amounts">${{ $savings }}</p>
          </div>
          <div class="col-md-10 charts">
            <h4>Needs</h4>
            <svg class="needschart" data-needs= {{ $needstotal }} data-needsspent= {{ $needsspent }}></svg>
            <h4>Wants</h4>
            <svg class="wantschart" data-wants= {{ $wantstotal }} data-wantsspent= {{ $wantsspent }}></svg>
            <h4>Savings</h4>
            <svg class="savingschart" data-savings= {{ $savingstotal }} data-savingsspent= {{ $savingsspent }}></svg>
            <script src="http://d3js.org/d3.v3.min.js"></script> 
          </div>
      </div>

    <!--   <div class="col-md-3 transactionpanel">
          <h3>Transaction History</h3>
      </div> -->
		</div>

	</div>



  </div>

	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
	<script src="js/budget.js"></script>
</body>
</html>