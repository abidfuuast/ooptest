<?php

class user {
	const id = 23;
	public $name = 'abid';
	public static $address = 'rawalpindi pakistan';
	
	public function changeId(){
		//self::id = 234;
	}
	
	public function changeName(){
		$this->name='abid hussain';
	}
	
	public function changeAddress(){
		self::$address = 'shakrial';
	}
	
}

$obUser = new user();

echo 'user name '.$obUser->name.'<br/>';

echo 'user const id '.user::id.'<br/>';

echo 'user address'.user::$address.'<br/>';

$obUser->changeName();

$obUser->changeAddress();


echo 'user name '.$obUser->name.'<br/>';

echo 'user const id '.user::id.'<br/>';

echo 'user address'.user::$address.'<br/>';
