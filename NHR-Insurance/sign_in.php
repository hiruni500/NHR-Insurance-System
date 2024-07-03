<?php
include_once "header.php";
?>


<div class="form">
    <div class="maincontent">
        <div class="signup-login">
            <form action="include/login.inc.php" class="login-form" method="post">
                
                <h2 class="signin_topic">Login</h2>
                <h1 class="greeting"><?php display_the_greeting(); ?></h1>
                <div class="getInput">
                <div class="inputfield">
                    <input type="text" placeholder="Username" name="uid">
                </div>
                <div class="inputfield">
                    <input type="password" placeholder="Password" name="pwd">
                </div>
                </div>
                <div class="forgot">
                    <label for=""><a href="forgot.php">Forgot password ?</a></label>
                </div>
                <div class="login">
                    <input type="submit" class="submit" value="Login" name="submit">
                </div>
                <div class="signup">
                    <label for="">Not a member ?  <a href="#" id="submit_login" >Sign-up</a></label>
                </div>
            </form>
    
            <form action="include/signup.inc.php" class="signup-form" method="post">
                <h2 class="signup_topic">Sign-Up</h2>
                <div class="formdetails">
                <div class="inputfield">
                    <label for="">First name : </label><br>
                    <input type="text" name="uid" placeholder="Enter your first name">
                </div>
                <div class="inputfield">
                    <label for="">Last name : </label><br>
                    <input type="text" name="lname" placeholder="Enter your last name">
                </div>
                <div class="inputfield">
                    <label for="">E-mail : </label><br>
                    <input type="email" name="mails" placeholder="Enter your e-mail">
                </div>
                <div class="inputfield">
                    <label for="">Contact number : </label><br>
                    <input type="text" name="contactno" placeholder="Enter your number">
                </div>
                <div class="inputfield">
                    <label for="">Password : </label><br>
                    <input type="password" name="pwd" placeholder="Enter the password">
                </div>
                <div class="inputfield">
                    <label for="">Re-enter password : </label><br>
                    <input type="password" name="pwdrepeat" placeholder="Confirm the password">
                </div>
                </div>
                <div class="agree">
                    <input type="checkbox" id="check">
                    <label for="check">I agree to these   <a href="termsAndCondition.php">Terms & Conditions</a></label>
                </div>
                <div class="login">
                    <input type="submit" class="submit" value="Sign-up" name="submit">
                </div>
                <div class="signin">
                    <p>Already a member ?
                    <label for=""><a href="#"  id="submit_sign_up">Login Here</a></label>
                    </p>
                </div>
            </form>
        </div>
        <div class="panels-maincontent">
            <div class="panel left-panel">
                <div class="include">
                    <h4>Welcome !</h4>
                    <p>NHR <span>Insurance</span></p>
                </div>
                <img src="images/login.png" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="include">
                    <p>NHR <span>Insurance</span></p>
                </div>
                <img src="images/sign-up.png" alt="" class="image">
            </div>
        </div>
    </div>
</div>


<?php

function display_the_greeting(){

    date_default_timezone_set('Asia/Colombo');
    $hour = date('G');

    if( $hour >= 0 &&  $hour < 12 ){
        echo "Good Morning !";
    } 
    else if( $hour >= 12 &&  $hour < 14 ){
        echo "Good Afternoon !";
    } 
    else if( $hour >= 14 &&  $hour < 19 ){
        echo "Good Evening !";
    }
    else if( $hour >= 19 &&  $hour <+ 24 ){
        echo "Good Night !";
    }
}

?>


<script src="javascript/sign_in.js"></script>



<?php
include_once "footer.php";
?>