<?php
include_once 'header.php';
?>

<form action="include/payment.inc.php" method="POST" class="form2">
<div class="paymentbody">

<h1>Insurance Payment</h1>
<div class="paymentbox">
    <div class="paymentleftside">
        <h2 class="paymenth2">BILLING ADDRESS</h2>
        <input type="text" name="fullname" placeholder="Full Name" > <br>
        <input type="text" name="email" placeholder="E-mail"> <br>
        <input type="text" name="address" placeholder="Address Ex:- NO,Street,Location"> <br>
        <input type="text" name="city" placeholder="City"> <br>
        <div class="sortbox">
        <input class="textboxshort" name="state" type="text" placeholder="State">
        <input class="textboxshort" name="zipcode" type="text" placeholder="Zip-Code">
        </div>
    </div>
    <div class="paymentrigntside">
    <h2 class="paymenth2">PAYMENT</h2>
        <input type="text" name="cardtype" placeholder="Enter You Card Type ">
        <img src="images/pngwing.com (8).png" alt=""><br>
        <input type="text" name="nameoncard" placeholder="Name on Card"><br>
        <input type="text" name="cardnumber" placeholder="Credit Card Number"><br>
        <input type="text" name="expmonth" placeholder="Exp Month"><br>
        <div class="sortbox">
        <input  type="text" name="expyear" placeholder="Exp year">
        <input  type="text" name="cvv" placeholder="CVV">

        <button onclick="alert('Successfully Pay !')" class="payment_button">Procees to Checkout</button>
        </div>
    </div>
    
    
</div>



</div>


</form>




<?php
include_once 'footer.php';
?>