<?php
class house {
	
	public $guard = 'Khalid Akram';
	public static $address = 'Gori Town';
	public static $area = '450x230 ms';
	
	public function displayGuard(){
		return $this->guard;
	}
	
	public static function displayAddress(){
		return self::$address;
		
	}
		
}


class room extends house {
	public $beds = 4;
	public static $roomNum = 565;
	
	public function displayBeds(){
		return $this->beds;
	}
	
	public static function displayRoomNum(){
		return self::$roomNum;
	}
	
	public static function roomAddress(){
		return parent::displayAddress();
	}
	
	public static function changeHouseAddress ($val){
		parent::$address = $val;
	}
}

room::$roomNum=70;

// create inst of class room
//$objRoom = new room;
//$objRoom->changeHouseAddress('shaheen town , its new address');

echo 'house address :  '.house::displayAddress();
echo "<br/>";
echo 'room num : '.room::displayRoomNum();
