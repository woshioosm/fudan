<?php
require ("mysql.php");
$id=trim($_GET["id"]);
$result = PdoMysql::getInstance()->getPeopleDetail($id);
echo  json_encode ($result[0]);
?>