<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Budget Tracker</title>

	<link rel="stylesheet" href="css/budget.css" />

	<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Coustard' rel='stylesheet' type='text/css'>
	
</head>
<body>

	<div class="container">

		<div class="header">
			<h1>budget tracker</h1>	
			<p id="signin">
				<span>Have An Account?</span><br /><br />
				<a href="/signin" id="signin_link">Log In</a>
			</p>
		</div>

		<div class="signup">
			
			<p id="summary">Budget Tracker is a powerful visual-oriented tool designed to help you keep track of your spending based off
				the 50/30/20 guideline. Create a unique financial profile tailored towards your needs.</p>

		</div>

		<div class="form">



			<form action="" method="POST" id="newprofile">
			
			
			<input type="text" name="firstname" id="firstname" placeholder="First Name" /><br />
			
			<input type="text" name="lastname" id="lastname" placeholder="Last Name" /><br />
			
			<input type="email" name="email" id="email" placeholder="Email" /><br />
			
			<input type="password" name="password" id="password" placeholder="Password" /><br />
		
			<input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" /><br />

			<input type="submit" value="CREATE PROFILE" id="create" />

	
			</form> 

		</div>
	
	

	</div>

	<!-- <h2>Create A New Profile</h2>

	
		
		

</body>
</html>
