<?php 

include "dbh.inc.php";
    
$fullname =$_POST['fullname'];
$email = $_POST['email'];
$address =$_POST['address'];
$city =$_POST['city'];
$state =$_POST['state'];
$zipid =$_POST['zipcode'];
$cartype =$_POST['cardtype'];
$nameoncard =$_POST['nameoncard'];
$cardnumber =$_POST['cardnumber'];
$expmonth =$_POST['expmonth'];
$expyear =$_POST['expyear'];
$cvv =$_POST['cvv'];

$sql = "insert into payment(fullname,email,address,city,state,zipid,card,cardname,cardnumber,expmonth,expyear,cvv) values(?,?,?,?,?,?,?,?,?,?,?,?)";
$statment = $connection->prepare($sql);

$statment->bind_param("ssssssssssss",$fullname,$email,$address,$city,$state,$zipid,$cartype,$nameoncard,$cardnumber,$expmonth,$expyear,$cvv);

if($statment->execute()){
    header('Location:../index.php');
}
else{
    echo 'insert data error';
}
