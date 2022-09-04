<?php

include_once '../OPDBS.php';

$opdbs = new OPDBS();



$name = $_POST["name"];
$lname = $_POST["last_name"];
$email = $_POST["email"];
$address = $_POST["address"];
$salary = $_POST["salary"];
$qualitfication = $_POST["qualitfication"];


$sql = "INSERT INTO lectuer (name, last_name, email, address,salary,qualitfication) 
VALUES ( '{$name}', '{$lname}', '{$email}', '{$address}', {$salary}, '{$qualitfication}' )";
$opdbs->query($sql);
$opdbs->close();

var_dump("success add");


$url = "../index.php";
echo "<meta http-equiv='refresh' content ='1;url=$url'>";

