<?php


class person {
	public $age=23;
	
	protected static $sex=4;
	public function __construct() {
		echo Date("h:m:s a d/m/Y");
		echo "<br>";
	}
	
	public function __destruct() {
		echo Date("h:m:s a d/m/Y");
		echo "<br>";
	}
	
	public function __toString() {
		return "WTF????";
	}
	
	
	public function SetProp($value) {
		$this->age=$value;
	}
	
	public function GetProp($value) {
		return $this->$value;
	}
}
class vipperson extends person {
	
	public function FuckProp($value) {
		return $this->$value*20;
	}
	
	public function FuckTimes() {
		return self::$sex;
	}
	
	
}

$Artur=new vipperson();
$Artur->SetProp(27);
echo $Artur->FuckProp(age);
echo "<br>";
echo $Artur->GetProp(age);
echo "<br>";
echo $Artur->FuckTimes();
print("<br><br>");
var_dump($Artur);
?>