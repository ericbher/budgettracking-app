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
		return View::make('dashboard') -> with('name', $name);
	  } else {
	  	return Redirect::to('/');
	  }
	}
	

	public function showDeposit()
	{
		return View::make('deposit');
	}

	public function makeDeposit()
	{
		$balance = new Data;
		$amount = Input::get('deposit');
		$balance->balance = $amount;
		$balance->save();

		return Redirect::to('dashboard');
	}

	public function doLogout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::to('login'); // redirect the user to the login screen
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
		$data->balance = 0.00;
		$data->user_id = $user->id;

		$data->save();	

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
