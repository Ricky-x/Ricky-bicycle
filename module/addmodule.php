<?php

include_once '../OPDBS.php';

$opdbs = new OPDBS();



$name = $_POST["name"];
$credit = intval($_POST["credit"]);
$level = intval($_POST["level"]);


$sql = "INSERT INTO module (name, credit, level) 
VALUES ( '{$name}', {$credit}, {$level} )";
$opdbs->query($sql);
$opdbs->close();




var_dump("success add");
//页面停留一秒跳转至指定链接
$url = "../index.php";
echo "<meta http-equiv='refresh' content ='1;url=$url'>";


