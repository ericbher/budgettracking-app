<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showLogin()
	{

		return View::make('login');
	}

	public function doLogin()
	{
		$rules = array(
			'email' => 'required|email',
			'password' => 'required|alphaNum|min:3'
			);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()){
			return Redirect::to('login')
			->withErrors($validator)
			->withInput(Input::except('password'));
		} else {
		$userdata = array(
				'email' => Input::get('email'),
				'password' => Input::get('password')
				);
		if (Auth::attempt($userdata)){
			return Redirect::to('dashboard');
		} else {
			return Redirect::to('login');
		}
	}
	}

	public function checkLogin()
	{
	  if(Auth::check()){
	    $id = Auth::id();
	    $name = Auth::user()->name;
	    $email = Auth::user()->email;
	    $balance = DB::table('budget') -> where('user_id','=', $id) -> pluck('total');
	    $needs = DB::table('budget') -> where('user_id','=', $id) -> pluck('needs');
        $wants = DB::table('budget') -> where('user_id','=', $id) -> pluck('wants');
        $savings = DB::table('budget') -> where('user_id','=', $id) -> pluck('savings');

        $total = DB::table('data') -> where('user_id','=', $id) -> where ('category', '=', 'Deposit') -> sum('transactions'); 
        $needstotal = number_format($total * .50, 2);
        $wantstotal = number_format($total * .30, 2);
        $savingstotal = number_format($total * .20, 2);

        $needsspent = DB::table('data') -> where('user_id','=', $id) -> where ('category', '=', 'needs') -> sum('transactions'); 
        $wantsspent = DB::table('data') -> where('user_id','=', $id) -> where ('category', '=', 'wants') -> sum('transactions'); 
        $savingsspent = DB::table('data') -> where('user_id','=', $id) -> where ('category', '=', 'savings') -> sum('transactions'); 

	    $data = ['name' => $name, 'total' => $balance, 'needs' => $needs, 'wants' => $wants, 'savings' => $savings, 'needstotal' => $needstotal, 'wantstotal' => $wantstotal, 'savingstotal' => $savingstotal, 'needsspent' => $needsspent, 'wantsspent' => $wantsspent, 'savingsspent' => $savingsspent ];
		return View::make('dashboard', $data);
	  } else {
	  	return Redirect::to('/');
	  }
	}
	

	public function showDeposit()
	{
	  if(Auth::check()){
		return View::make('deposit');
	  } else {
	  	return Redirect::to('/');
	  }
	}

	public function makeDeposit()
	{
		$transactions = new Data;
		$amount = Input::get('deposit');
		$transactions->transactions = $amount;
		$transactions->category = 'Deposit';
		$id = Auth::id();
		$transactions->user_id = $id;
		$transactions->save();

		$needs = round($amount * .50, 2);
		$wants = round($amount * .30, 2);
		$savings = round($amount * .20, 2);

        DB::table('budget') -> where('user_id','=', $id) -> increment('total', $amount);
        DB::table('budget') -> where('user_id','=', $id) -> increment('needs', $needs);
        DB::table('budget') -> where('user_id','=', $id) -> increment('wants', $wants);
        DB::table('budget') -> where('user_id','=', $id) -> increment('savings', $savings);

        
		return Redirect::to('dashboard');
	}

	public function doLogout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::to('login'); // redirect the user to the login screen
	}

	public function showWithdraw()
	{
		if(Auth::check()){
		return View::make('withdraw');
	  } else {
	  	return Redirect::to('/');
	  }
	}

	public function logExpense()
	{
		$transactions = new Data;
		$amount = Input::get('amount');
		$description = Input::get('description');
		$category = Input::get('category');
		$id = Auth::id();

		$transactions->transactions = $amount;
		$transactions->category = $category;
		$transactions->description = $description;
		$transactions->user_id = $id;
		$transactions->save();

		DB::table('budget') -> where('user_id','=', $id) -> decrement('total', $amount);
		DB::table('budget') -> where('user_id','=', $id) -> decrement($category, $amount);


		

		return Redirect::to('dashboard');


	}

	public function signUp()
	{

		return View::make('index');
	}

	public function newUser()
	{
		$rules = array(
		'name' => 'required|alpha',
		'email' => 'required|email|unique:users',
		'password' => 'required',
		'confirmpassword' => 'required|same:password'
	);

	$messages = array(
		'same' => 'The :others must match.'
	);

	$validator = Validator::make(Input::all(), $rules, $messages);

	if ($validator->fails()) {
		$messages = $validator->messages();

		return Redirect::to('/')
			->withErrors($validator)
			->withInput(Input::except('password', 'confirmpassword'));
	} else {
	
		$user = new User;
		$user->name = Input::get('name');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));

		$user->save();

		$data = new Data;
		$data->transactions = 0.00;
		$data->category = 'Deposit';
		$data->description = 'Starting Amount';
		$data->user_id = $user->id;

		$data->save();	

		$budget = new Budget;
		$budget->total = 0.00;
		$budget->needs = 0.00;
		$budget->wants = 0.00;
		$budget->savings = 0.00;
		$budget->user_id = $user->id;

		$budget->save();

		$userdata = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);
			if (Auth::attempt($userdata)){
				return Redirect::to('dashboard');
			}
		} 
	}

}
