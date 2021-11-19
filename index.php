<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {background: #2368CF;
background: -webkit-linear-gradient(to right, #2368CF 0%, #470826 100%);
background: -moz-linear-gradient(to right, #2368CF 0%, #470826 100%);
background: linear-gradient(to right, #2368CF 0%, #470826 100%);
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPL</title>
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
	public function __construct($name,$age,$gender,$address) {
		$this -> name = $name;
		$this -> age = $age;
	    $this -> gender = $gender;
		$this -> address = $address;
	   
	}
}



class info extends generalinfo  implements Patient {
	function GeneralInfo() {
		echo 'Name:'. $this -> name .'  '.' Age:'. $this -> age .' '. 'Gender:' . $this -> gender.' '. $this -> address ;
	  
	
	}
}
class info1 extends generalinfo  implements Patient {
	function GeneralInfo() {
		echo 'Name:'. $this -> name .'  '.' Age:'. $this -> age .' '. 'Gender:' . $this -> gender .' '.$this -> address;
	  
	
	}
}
class info2 extends generalinfo  implements Patient {
	function GeneralInfo() {
		echo 'Name:'. $this -> name .'  '.' Age:'. $this -> age .' '. 'Gender:' . $this -> gender .' '. $this -> address;
	  
	
	}
}
class info3 extends generalinfo  implements Patient {
	function GeneralInfo() {
		echo 'Name:'. $this -> name .'  '.' Age:'. $this -> age .' '. 'Gender:' . $this -> gender .' '. $this -> address;
	  
	
	}
}
class info4 extends generalinfo  implements Patient {
	function GeneralInfo() {
		echo 'Name:'. $this -> name .'  '.' Age:'. $this -> age .' '. 'Gender:' . $this -> gender .' '. $this -> address;
	  
	
	}
}

echo "Status: Done"."<br>";
$Info = new info('Hyvor',12,'male','SDASADAS');
echo "Date of consultation:" . date("m/d/y") . "<br>";
echo "Infomation:". "<br>";
$Info -> GeneralInfo();
echo "<br>";
echo "<br>";
echo "Status: Done"."<br>";
$Info = new info1('Ezekiel',13,'male','ASDASDAS');
echo "Date of consultation:" . date("m/d/y") . "<br>";
echo "Infomation:". "<br>";
$Info -> GeneralInfo();
echo "<br>";
echo "<br>";
echo "Status: Done"."<br>";
$Info = new info2('Tyron  ',18,'male','ASDASDSA');
echo "Date of consultation:" . date("m/d/y") . "<br>";
echo "Infomation:". "<br>";
$Info -> GeneralInfo();
echo "<br>";
echo "<br>";
echo "Status: Done"."<br>";
$Info = new info3('Diana',18,'female','ASDASDSA');
echo "Date of consultation:" . date("m/d/y") . "<br>";
echo "Infomation:". "<br>";
$Info -> GeneralInfo();
echo "<br>";
echo "<br>";
echo "Status: Done"."<br>";
$Info = new info4('kei',18,'female','ASDASD');
echo "Date of consultation:" . date("m/d/y") . "<br>";
echo "Infomation:". "<br>";
$Info -> GeneralInfo();





?>
</body>
</html>