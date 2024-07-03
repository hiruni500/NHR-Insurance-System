<?php


$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "nhr_insurence";

$connection =new mysqli($serverName, $dbUsername, $dbPassword, $dbName);

if($connection -> connect_error ){
    die("connection faild : ");
}



    
