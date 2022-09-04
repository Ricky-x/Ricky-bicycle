<?php

include_once '../OPDBS.php';

$opdbs = new OPDBS();

$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
$last_name = $_REQUEST["last_name"];
$email = $_REQUEST["email"];
$address = $_REQUEST["address"];
$salary = $_REQUEST["salary"];
$qualitfication = $_REQUEST["qualitfication"];

$sql = "UPDATE lectuer SET name=`{$name}`, last_name=`{$last_name}`, email=`{$email}` ,
                   address='{$address}'  , salary={$salary}, qualitfication='{$qualitfication}' WHERE id={$id}";
$opdbs->query($sql);
$opdbs->close();

var_dump("success add");




//页面停留一秒跳转至指定链接
$url = "./lectuerList.php";
echo "<meta http-equiv='refresh' content ='1;url=$url'>";

