$(document).ready(function(){

	$('.currency').on('keyup', function(){
		var deposit = +$('.currency').val();
		var needs = (deposit * .50).toFixed(2);
		var wants = (deposit * .30).toFixed(2);
		var savings = (deposit * .20).toFixed(2);
		$('.needs').text('$' + needs);
		$('.wants').text('$' + wants);
		$('.savings').text('$' + savings);
	});

	var checkPasswords = function(){
		var confirmpass = $('#confirmpassword').val();
		var pass = $('#password').val();
		if (confirmpass != pass){
			$('.passwordmatch').addClass('has-error');
		} else {
			$('.passwordmatch').removeClass('has-error');
		}	
	}

	$('#confirmpassword').on('keyup', checkPasswords);

	$('#password').on('keyup', checkPasswords);








})