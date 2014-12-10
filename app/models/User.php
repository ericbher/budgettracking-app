<?php 


class User extends Eloquent {

	//Columns that are able to be filled
	protected $fillable = array('lastname', 'firstname', 'email', 'password', 'balance');

	//Relationships
	
	public function data(){
		return $this->hasOne('Data');
	} 



	public function capitalize($firstname){
		$capfirstname = strtolower($firstname);
		$capfirstname = ucfirst($capfirstname);
		return $capfirstname;
	}
}