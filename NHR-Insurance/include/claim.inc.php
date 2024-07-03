<?php

include "dbh.inc.php";

$vhicleNO =$_POST['vhicleNO'];
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$poFname =$_POST['poFname'];
$poLname =$_POST['poLname'];
$strAddress =$_POST['strAddress'];
$strAddressline =$_POST['strAddressline'];
$city =$_POST['city'];
$postelid =$_POST['postelid'];
$region =$_POST['region'];
$cemail =$_POST['cemail'];
$cphone =$_POST['cphone'];
$date =$_POST['date'];
$discription =$_POST['discription'];

$sql = "insert into claim(vehicleNo,agentFname,agentLname,policyholderFnme,policyholderLname,streetAddress,streetAddressLine2,city,region,postalID,Email,phoneNo,Date,discription) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$statment = $connection->prepare($sql);

$statment->bind_param("sssssssssssids",$vhicleNO,$fname,$lname,$poFname,$poLname,$strAddress,$strAddressline,$city,$postelid,$region,$cemail,$cphone,$date,$discription);

if($statment->execute()){
    header('Location:../index.php');
}
else{
    echo 'insert data error';
}


if(isset($_POST['submit'])){
    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];
    $temp_name = $_FILES['image']['tmp_name'];

    $upload_to ='claimimages/';

    move_uploaded_file($temp_name, $upload_to . $file_name);
}



