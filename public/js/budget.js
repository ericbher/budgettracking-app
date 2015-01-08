$(document).ready(function(){

	

	

	$('.currency').on('keyup', function(){
		var deposit = +$('.currency').val();
		if (isNaN(deposit)){
			$('.error').text('Please enter a number');
		} 
		else {
		$('.error').text('');
		if (deposit == 0.00 || deposit == 0){
			$('.needs').text('');
			$('.wants').text('');
			$('.savings').text('');
			$('.error').text('Deposit must be greater than zero.');

		} else
		{
		$('.error').text('');
		var needs = (deposit * .50).toFixed(2);
		var wants = (deposit * .30).toFixed(2);
		var savings = (deposit * .20).toFixed(2);
		$('.needs').text('$' + needs);
		$('.wants').text('$' + wants);
		$('.savings').text('$' + savings);
		}
		}


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

	$('.needs-btn').on('click', function() {
		var needscard = $(this);

		if(needscard.data('flipped'))
		{
			needscard.data('flipped', false);
			needscard.off('click');

			needscard.on('click', '.flipover', function(){
				needscard.revertFlip();	
				needscard.on('click');
			});
			
		}

		else 
		{
			needscard.flip({
				direction: 'lr',
				speed: 150,
				onBefore: function(){
					needscard.find('.front').hide();
					needscard.find('.back').show();
				}

				
			});

			needscard.data('flipped', true);
		}

	});

	$('.wants-btn').on('click', function() {
		var wantscard = $(this);

		if(wantscard.data('flipped'))
		{
			wantscard.data('flipped', false);
			wantscard.off('click');

			wantscard.on('click', '.flipover', function(){
				wantscard.revertFlip();	
				wantscard.on('click');
			});
			
		}

		else 
		{
			wantscard.flip({
				direction: 'lr',
				speed: 150,
				onBefore: function(){
					wantscard.find('.front').hide();
					wantscard.find('.back').show();
				}

				
			});

			wantscard.data('flipped', true);
		}

	});

	$('.savings-btn').on('click', function() {
		var savingscard = $(this);

		if(savingscard.data('flipped'))
		{
			savingscard.data('flipped', false);
			savingscard.off('click');

			savingscard.on('click', '.flipover', function(){
				savingscard.revertFlip();	
				savingscard.on('click');
			});
			
		}

		else 
		{
			savingscard.flip({
				direction: 'lr',
				speed: 150,
				onBefore: function(){
					savingscard.find('.front').hide();
					savingscard.find('.back').show();
				}

				
			});

			savingscard.data('flipped', true);
		}

	});

	
	var needs = Number($('.needschart').data('needs'));
	var needsspent = Number($('.needschart').data('needsspent'));
	var wants = Number($('.wantschart').data('wants'));
	var wantsspent = Number($('.wantschart').data('wantsspent'));
	var savings = Number($('.savingschart').data('savings'));
	var savingsspent = Number($('.savingschart').data('savingsspent'));
	

	var needdata = [needsspent, needs];
	var wantdata = [wantsspent, wants];
	var savingdata = [savingsspent, savings];



	var width = 420,
	barHeight = 20,
	height = 50;

	var x = d3.scale.linear()
		.domain([0, d3.max(needdata)])
		.range([0, width]);

	var needchart = d3.select(".needschart")
		.attr("width", width)
		.attr("height", height);

	var bar = needchart.selectAll("g")
		.data(needdata)
	.enter().append("g")
		.attr("transform", function(d, i) { return "translate(0," + i * barHeight + ")"; });

	bar.append("rect")
		.attr("width", x)
		.attr("height", barHeight - 1);

	bar.append("text")
	    .attr("x", function(d) { return x(d) - 3; })
	    .attr("y", barHeight / 2)
	    .attr("dy", ".35em")
	    .text(function(d) { return d; });

	// ------------------------------------------------
    var m = d3.scale.linear()
		.domain([0, d3.max(wantdata)])
		.range([0, width]);

	var wantchart = d3.select(".wantschart")
		.attr("width", width)
		.attr("height", height);

	var wantbar = wantchart.selectAll("g")
		.data(wantdata)
	.enter().append("g")
		.attr("transform", function(d, i) { return "translate(0," + i * barHeight + ")"; });

	wantbar.append("rect")
		.attr("width", m)
		.attr("height", barHeight - 1);

	wantbar.append("text")
	    .attr("x", function(d) { return m(d) - 3; })
	    .attr("y", barHeight / 2)
	    .attr("dy", ".35em")
	    .text(function(d) { return d; });

	// ------------------------------------------------
	
    var z = d3.scale.linear()
		.domain([0, d3.max(savingdata)])
		.range([0, width]);

	var savingchart = d3.select(".savingschart")
		.attr("width", width)
		.attr("height", height);

	var savingbar = savingchart.selectAll("g")
		.data(savingdata)
	.enter().append("g")
		.attr("transform", function(d, i) { return "translate(0," + i * barHeight + ")"; });

	savingbar.append("rect")
		.attr("width", z)
		.attr("height", barHeight - 1);

	savingbar.append("text")
	    .attr("x", function(d) { return z(d) - 3; })
	    .attr("y", barHeight / 2)
	    .attr("dy", ".35em")
	    .text(function(d) { return d; });


	if(needsspent > needs){
		$('.needschart').first('rect').css("fill", "#EA2E49");
		$('.needschart rect:eq( 1 )').css("fill", "#42DE75");
	} else {
		$('.needschart rect').css("fill", "#42DE75");
	}

	if(wantsspent > wants){
		$('.wantschart').first('rect').css("fill", "#EA2E49");
		$('.wantschart rect:eq( 1 )').css("fill", "#42DE75");
	} else {
		$('.wantschart rect').css("fill", "#42DE75");
	}

	if(savingsspent > savings){
		$('.savingschart').first('rect').css("fill", "#EA2E49");
		$('.savingschart rect:eq( 1 )').css("fill", "#42DE75");
	} else {
		$('.savingschart rect').css("fill", "#42DE75");
	}





	

	





	








})