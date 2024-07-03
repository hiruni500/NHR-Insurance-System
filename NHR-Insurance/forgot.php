<?php
include_once "header.php";
?>

<div class="forgot_cont">
    <div class="forgot_index">
    <form action="forgot.php" method="post" class="forgot_form">
        <h2 class="forgot_h2">Reset Password</h2>
        <div class="forgot_input_items">
            <input type="text" name="username" class="forgot_box" placeholder="User Name">
            <input type="password" name="new_password" class="forgot_box" placeholder="New Password">
            <input type="password" name="conpassword" class="forgot_box" placeholder="Re-enter Password">
        </div> 
            <input type="submit" name="submit" value="Save" class="forgot_save" id="forgot_submit">
    </form>
    <div class="forgot_right_side">
        <img src="images/forgot_image.png" alt="image">
    </div>
    </div>
</div>

<?php
include_once "footer.php";
?>
