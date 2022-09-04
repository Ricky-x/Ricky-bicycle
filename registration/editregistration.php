<?php

include_once '../OPDBS.php';

$opdbs = new OPDBS();

$id = $_REQUEST["id"];
$st_id = $_REQUEST["st_id"];
$l_id = intval($_REQUEST["l_id"]);
$block = $_REQUEST["block"];
$mark = $_REQUEST["mark"];

$sql = "UPDATE registration SET st_id={$st_id}, l_id={$l_id}, block='{$block}', mark='{$mark}'
                   WHERE id={$id}";
$opdbs->query($sql);
$opdbs->close();




