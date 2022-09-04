<?php

include_once '../OPDBS.php';

$opdbs = new OPDBS();

$id = $_REQUEST["STID"];

$sql = "DELETE FROM student WHERE STID= {$id}";
$opdbs->query($sql);
$opdbs->close();

var_dump("del add");