<?php

include_once '../OPDBS.php';

$opdbs = new OPDBS();

$id = $_REQUEST["id"];

$sql = "DELETE FROM registration WHERE id= {$id}";
$opdbs->query($sql);
$opdbs->close();

var_dump("del add");