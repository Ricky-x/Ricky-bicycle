<?php

include_once '../OPDBS.php';

$opdbs = new OPDBS();

$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
$level = $_REQUEST["level"];
$credit = $_REQUEST["credit"];

$sql = "UPDATE module SET name='{$name}', level={$level}, credit={$credit}
                   WHERE id={$id}";
$opdbs->query($sql);
$opdbs->close();




//页面停留一秒跳转至指定链接
$url = "./moduleList.php";
echo "<meta http-equiv='refresh' content ='1;url=$url'>";

