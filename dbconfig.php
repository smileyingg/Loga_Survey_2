<?php
date_default_timezone_set('Asia/Bangkok');
error_reporting(0);

$host = "localhost";
$user = "root";
$password = '';
$dbname = 'new_loga_survey';


$mysqli = new mysqli($host, $user, $password, $dbname);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->query("SET character_set_results=utf8");
$mysqli->query("SET character_set_client=utf8");
$mysqli->query("SET character_set_connection=utf8");
$mysqli->query("SET NAMES UTF8");


$config_projectName = "ระบบล็อกอิน API ONE ID";


?>
