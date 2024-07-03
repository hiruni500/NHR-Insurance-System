<?php
if(isset($_POST["submit"])){
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if(emptyInputLogin($username,$pwd)!== false){
        exit();
    }

    loginUser($connection,$username,$pwd);
}
else{
    header('Location:../sign_in.php');
    exit();
}


