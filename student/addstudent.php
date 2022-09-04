<?php

include_once '../OPDBS.php';

$opdbs = new OPDBS();



$id = $_POST["STID"];
$name = $_POST["name"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$address = $_POST["address"];

$sql = "INSERT INTO student (STID, Name, Lastname, Email, Address) 
VALUES ({$id}, '{$name}', '{$lname}', '{$email}', '{$address}' )";
$opdbs->query($sql);
$opdbs->close();

var_dump("success add");




//页面停留一秒跳转至指定链接
$url = "../index.php";
echo "<meta http-equiv='refresh' content ='1;url=$url'>";

