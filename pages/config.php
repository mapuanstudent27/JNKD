<?php
$host = "mysql-2378d1c4-jnkd-project.g.aivencloud.com"; 
$user = "avnadmin"; 
$password = "AVNS_rhKkoHP4WJ927TZL5Mr"; 
$database = "defaultdb"; 
$port = 14355;

$con = new mysqli($host, $user, $password, $database, $port);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
