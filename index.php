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

interface Patient{
      public function assignPatient($name,$age,$gender);
      public function getPatientsInfo();
      public  function deletePatient($id);
      
}


class patients_data implements Patient {
    public $name;
  public function assignPatient($name,$age,$gender){
    $ages =(string)$age;
    $genders=$gender;
    if($genders=="male"){
        $all=$name." ".$ages." ".$gender;
    $name = strtolower($all);
    $name = preg_split('/\.|\!/', $name);              
    foreach ($name as &$sentence) {
    $sentence = ucwords(trim($sentence));
    }
    $name = implode('. ', $name);
      $this->name = $name;
    }else if($genders=="female"){
        $all=$name." ".$ages." ".$gender;
    $name = strtolower($all);
    $name = preg_split('/\.|\!/', $name);              
    foreach ($name as &$sentence) {
    $sentence = ucwords(trim($sentence));
    }
    $name = implode('. ', $name);
      $this->name = $name;
    }else{
        echo "Plss check your input in gender\n";
    }
 }
public function storeInTextFile() {
$data =$this->name;
$output = "";
   $arr = explode("\n", $data);
   foreach ($arr as $word){
     $output .= '"'.trim($word)."\"\n";
   }
$fp = fopen('data.txt', 'a');
fwrite($fp, $output);
fclose($fp);
}


public function getPatientsInfo(){

        echo $this->GeneralInfo();

    }
public  function deletePatient($id){
     
}


public function admin(){
$myFile = "data.txt";
$lines = file($myFile);
$array_count_values = array_count_values($lines);
if(is_array($array_count_values) && count($array_count_values)>0){
   foreach ($array_count_values as $key => $value){
   }
      if($value>1){
         echo "Plss check your input the name is already in use!";
         file_put_contents("data.txt", "");
      }else{
         print_r($lines);
      }
   
}
}
}

$p1 = new patients_data();
$p1->assignPatient("Patrick star",18,"male");
$p1->deletePatient(2);
$p1->storeInTextFile();

$p2 = new patients_data();
$p2->assignPatient("SpongeBob Squarepants",17,"male");
$p2->storeInTextFile();

$p3 = new patients_data();
$p3->assignPatient("Eugene Krab",28,"male");
$p3->storeInTextFile();



$ADMIN = new patients_data();
$ADMIN->admin();


?>
</body>
</html>