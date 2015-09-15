<?php
class person{
public $gender;
public $age;
public $weight;
public $height;
private static $constant=110;
function __construct($age, $gender, $weight, $height) {
$this->gender=$gender;
$this->age=$age;
$this->weight=$weight;
$this->height=$height;
}
function body_index() {
$index = $this->height - $this->weight - self::$constant;
switch(true)
{
	case ($index<-20):
		echo "You very fat";
	break;
	case ($index<-10 && $index>=-20):
		echo "You  fat";
	break;
	case ($index<=10 && $index>=-10):
		echo "You norm";
	break;
	case ($index>10 && $index<=20):
		echo "You thin";
	break;
	case ($index>20):
		echo "You very thin";
	break;
	}
return;
}

}

class employee extends person{
public $job_title;
function __construct($job_title,$age,$gender,$weight,$height) {
	parent::__construct($age,$gender,$weight,$height);
	$this->job_title=$job_title;
}
}

class student extends person{

}


$Mike = new employee("reseracher",18,"Man",45,180);
var_dump($Mike);
echo $Mike->constant;
echo $Mike->body_index();
?>