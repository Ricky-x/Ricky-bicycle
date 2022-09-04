<?php

include_once '../OPDBS.php';

$opdbs = new OPDBS();

$id = $_REQUEST["STID"];
$name = $_REQUEST["Name"];
$lname = $_REQUEST["Lname"];
$email = $_REQUEST["Email"];

$sql = "UPDATE student SET Name='{$name}', Lastname='{$lname}', Email='{$email}' WHERE STID={$id}";
$opdbs->query($sql);
$opdbs->close();

var_dump("success up");


