<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
Interface  Patient {
	public function GeneralInfo();

}

class generalinfo {
	public $name;
	public $age;
	public $gender;
	public function __construct($name,$age,$gender,$bloodtype,$weight,$height,$bloodpressure) {
		$this -> name = $name;
		$this -> age = $age;
	    $this -> gender = $gender;
	     $this -> bloodtype = $bloodtype;
	     $this -> weight = $weight;
	     $this -> height = $height;
	      $this -> bloodpressure = $bloodpressure;
	}
}



class info extends generalinfo  implements Patient {
	function GeneralInfo() {
		echo 'My name is '. $this -> name .' '.' Age:'. $this -> age .' '. 'Gender:' . $this -> gender . ' '.'bloodtype:' .  $this -> bloodtype . ' ' . 'Weight:'. $this -> weight . ' ' .'height:'. $this -> height . ' ' .'Bloodpressure:'. $this -> bloodpressure .' ';
	   
	
	}
}
$Info = new info('Hyvor',12,'male','A',59,'6 foot','80/120');
$Info -> GeneralInfo();
$Info = new info('Ezekiel',13,'male','B',49,'5 foot','80/110');
$Info -> GeneralInfo();
$Info = new info('Tyron',18,'male','B+',69,'4 foot','80/110');
$Info -> GeneralInfo();
$Info = new info('Diana',18,'female','O',79,'3 foot','80/110');
$Info -> GeneralInfo();
$Info = new info('kei',18,'female','A',43,'6,1 foot','80/111');
$Info -> GeneralInfo();






</body>
</html>