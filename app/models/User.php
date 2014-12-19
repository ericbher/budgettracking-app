<?php 

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface{

	//Columns that are able to be filled
	protected $fillable = array('name', 'email', 'password');

	//Relationships
	
	public function data(){
		return $this->hasMany('Data');
	} 

	public function getRememberToken()
	{
    	return $this->remember_token;
	}

	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
	    return 'remember_token';
	}

	public function getAuthIdentifier()
	{
    	return $this->getKey();
	}


	public function getAuthPassword()
	{
	    return $this->password;
	}

	public function getReminderEmail()
	{
    	return $this->email;
	}

}