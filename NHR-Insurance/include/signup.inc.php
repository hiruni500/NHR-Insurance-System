<?php
if(isset($_POST["submit"])){
    $username = $_POST["uid"];
    $lastname = $_POST["lname"];
    $emails = $_POST["mails"];
    $contactNo = $_POST["contactno"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    $emptyInput = emptyInputSignup($username,$lastname,$emails,$contactNo,$pwd,$pwdRepeat);
    $invalidUid = invalidUid($username);
    $invalidEmail = invalidEmail($emails);
    $pwsMatch = pwdMathch($pwd , $pwdRepeat);
    $uidExists = uidExists($connection, $username ,$emails);

    if($emptyInput !== false){
        header("Location:../sign_in.php?error=emptuinput");
        exit();
    }
    if($invalidUid !== false){
        header("Location:../sign_in.php?error=invaliduid");
        exit();
    }
    if($invalidEmail !== false){
        header("Location:../sign_in.php?error=invalidemail");
        exit();
    }
    if($pwsMatch !== false){
        header("Location:../sign_in.php?error=passworddontmatch");
        exit();
    }
    if($uidExists !== false){
        header("Location:../sign_in.php?error=usernametaken");
        exit();
    }

    createUser($connection,$username,$lastname,$emails,$contactNo,$pwd);

    
}
else{
    header('Location:../sign_in.php');
    exit();
}