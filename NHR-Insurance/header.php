<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NHR Insurance</title>
    <link rel="stylesheet" href="css/style_.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index_.css">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/forgot.css">
    <link rel="stylesheet" href="css/FAQs.css">
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="stylesheet" href="css/services_.css">
    <link rel="stylesheet" href="css/termsandcondition.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/claims.css">
    <link rel="stylesheet" href="css/payment_.css">
    



    <script src="javascript/script.js" defer></script>
    <script src="javascript/FAQ.js" defer></script>
    
    
</head>
<body>

<nav>
        <a href="index.php" class="logo">
            NHR <span>Insurance</span>
        </a>
        <h3><?php
if(isset($_SESSION["username"])){
    echo "Hello <br>"; echo $_SESSION["username"].'!';
}?></h3>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="about_us.php">About Us</a>
            </li>
            <li>
                <a href="contact_us.php">Contact Us</a>
            </li>
            <li>
                <a href="termsAndCondition.php">Terms & Conditions</a>
            </li>
            <li>
            <a href="FAQ.php">FAQs</a>
            </li>
            <li>
                <a href="payment.php">
                <?php
                if(isset($_SESSION["username"])){
                     echo "Payment";   
                        } ?>
                </a>
            </li>

            <li>
                <a href="claim.php">
                <?php
                if(isset($_SESSION["username"])){
                     echo "Claim";   
                        } ?>
                </a>
            </li>
            
        </ul>
        <?php
if(isset($_SESSION["username"])){
    echo '<a href="include/logout.inc.php" class="Sign_in">Log-Out</a>';
}else{
    echo '<a href="sign_in.php" class="Sign_in">Sign In</a>';
}?>
        
    </nav>

    <div class="container">