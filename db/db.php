<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_database = "planteprotein_b4";

$db = mysqli_connect($db_host, $db_user, $db_password, $db_database);
if(!$db){
    die("Error - cant connect or find db");
}

if (!$db->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $db->error);
}

?>