<?php

$servername= "localhost:3306";
$db_username= "cchs_mmutter";
$db_password= "eagles";
$db_database= "cchs_mmutter";

$mySQLI = new mySQLI($servername, $db_username, $db_password, $db_database);
if($mySQLI->connect_error){
    echo('Failure'.$mySQLI->connect_error);
    exit();
}

mysql_select_db("cchs_mmutter") or die(mysql_error());

?>