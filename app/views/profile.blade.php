

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Budget Tracker | Profile Creator</title>

	<!-- CSS -->

	<link rel="stylesheet" href="css/budget.css" />


	<!-- JS -->
	<script src="js/angular.min.js"></script>
    <script src="js/angular-ui-router.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-animate.min.js"></script>
	<script src="js/profile.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Coustard' rel='stylesheet' type='text/css'>
</head>
<body ng-app="formApp">

	<div class="navcontainer">
		
		<h2>budget tracker</h2>

	</div>



	<div class="main">
		

		<div class="questions">
			<div ui-view></div>

		</div>
		
	</div>


	
	
	
	
</body>
</html>