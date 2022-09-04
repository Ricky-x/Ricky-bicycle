<?php

include_once '../OPDBS.php';

$opdbs = new OPDBS();



$st_id = $_POST["st_id"];
$l_id = intval($_POST["l_id"]);
$block = $_POST["block"];
$mark = $_POST["mark"];


$sql = "INSERT INTO registration (st_id, l_id, block, mark) 
VALUES ( {$st_id}, {$l_id}, '{$block}', '{$mark}' )";
$opdbs->query($sql);
$opdbs->close();

var_dump("success add");
//页面停留一秒跳转至指定链接
$url = "../index.php";
echo "<meta http-equiv='refresh' content ='1;url=$url'>";


