<?php

require_once ('include/dbh.inc.php');
?>
 <?php
if(isset($_POST['submit'])){
    $errors=array();

    if(!isset($_POST['username']) || strlen(trim($_POST['username'])) < 1){
        $errors[] = 'Username is missing / invalid';
    }

    if(!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1){
        $errors[] = 'password is missing / invalid';
    }
    if(empty($errors)){

        $usernane= mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);

        $query ="SELECT * FROM admin WHERE username='{$usernane}' AND apassword='{$password}' LIMIT 1";

        $result_set = mysqli_query($connection, $query);

        if($result_set){
            if(mysqli_num_rows($result_set) == 1){
                header('Location:admin.php');
                
            }else{
                $errors[]='invalid username/password';
            }
        }else{
            $errors[]='database query failed';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminlogin.css">
    <title>Document</title>
</head>
<body>
    



    <div class="adminloginbox">

    
        <form action="adminlogin.php" method="post">
        <h1 class="adminheading">Admin Login</h1>
        <?php
        if(isset($errors) && !empty($errors)){
            echo '<p class="error">Invalid username or password !</p>';
        }
        ?>
            <input type="text" name="username" placeholder="Admin username" class="admintextbox"> <br>
            <input type="password" name="password" placeholder="Admin password" class="admintextbox"> <br>
            <input type="submit" name="submit" id="sub" class="adminloginbtn">
        </form>
    </div>

    

</body>
</html>
<?php mysqli_close($connection);?>

