
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>

    <div id="toggle"></div>
    <div id="sidebar">
        <ul>
           <li><a href="index.php">home</a></li>
           <li onclick="toggle1()"><a href="#">Message</a></li>
           <li onclick="toggle2()"><a href="#">payment</a></li> 
           <li onclick="toggle3()"><a href="#">claim</a></li> 
        </ul>
    </div>

    <script>
        const toggle = document.getElementById('toggle');
        const sidebar = document.getElementById('sidebar');

        document.onclick = function(e){
            if(e.target.id !== 'sidebar' && e.target.id !== 'toggle')
            {
                toggle.classList.remove('active');
                sidebar.classList.remove('active');
            }
        }
        toggle.onclick = function(){
            toggle.classList.toggle('active');
            sidebar.classList.toggle('active');
        }

        function toggle1(){
            var x = document.getElementById('sowdata');

            if(x.style.display === "none"){
                x.style.display = "block";
            }
            else{
                x.style.display ="none";
            }
        }
        function toggle2(){
            var x = document.getElementById('showpay');

            if(x.style.display === "none"){
                x.style.display = "block";
            }
            else{
                x.style.display ="none";
            }
        }

        function toggle3(){
            var x = document.getElementById('sowclaim');

            if(x.style.display === "none"){
                x.style.display = "block";
            }
            else{
                x.style.display ="none";
            }
        }
   
    </script>


        

        


<div id="sowdata">
    <table>
    <tr>
        <th>Name</th>
        <th>email</th>
        <th>discription</th>
    </tr>
    
    <?php
    include 'include/dbh.inc.php';

    $sql = "SELECT name,email,description FROM contactus";
    $result = $connection->query($sql);

    if($result -> num_rows > 0)
    {
        while($row = $result-> fetch_assoc()){
           echo "<tr><td>". $row['name']." </td><td>". $row['email']."</td><td>".$row["description"]."</td></tr>"; 
        }
        echo "</table>";
    }
    else{
        echo "0 result";
    }
    $connection-> close();
    ?>
    </table>
    
</div>



<div id="showpay">
    <table>
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Zip-Code</th>
        <th>Type of card</th>
        <th>Name on Card</th>
        
    </tr>
    <?php
    include 'include/dbh.inc.php';

    $sql = "SELECT fullname,email,address,city,state,zipid,card,cardname FROM payment";
    $result = $connection->query($sql);

    if($result -> num_rows > 0)
    {
        while($row = $result-> fetch_assoc()){
           echo "<tr><td>". $row['fullname']." </td><td>". $row['email']."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["zipid"]."</td><td>".$row["card"]."</td><td>".$row["cardname"]."</td></tr>"; 
        }
        echo "</table>";
    }
    else{
        echo "0 result";
    }
    $connection-> close();
    ?>
    </table>
    
</div>


<div id="sowclaim">
    <table>
    <tr>
        <th>Vehicle Number</th>
        <th>Policyholder First Name</th>
        <th>Policyholder Last Name</th>
        <th>Street Address</th>
        <th>Street Address Line 2</th>
        <th>City</th>
        <th>Region</th>
        <th>postal ID</th>
        <th>Email</th>
        <th>Phone No</th>
        <th>Date</th>
        <th>discription</th>
    </tr>
    
    <?php
    include 'include/dbh.inc.php';

    $sql = "SELECT vehicleNo,policyholderFnme,policyholderLname,streetAddress,streetAddressLine2,city,region,postalID,Email,phoneNo,Date,discription FROM claim";
    $result = $connection->query($sql);

    if($result -> num_rows > 0)
    {
        while($row = $result-> fetch_assoc()){
           echo "<tr><td>". $row['vehicleNo']." </td><td>". $row['policyholderFnme']."</td><td>". $row['policyholderLname']."</td><td>". $row['streetAddress']."</td><td>". $row['streetAddressLine2']."</td><td>". $row['city']."</td><td>". $row['region']."</td><td>". $row['postalID']."</td><td>". $row['Email']."</td><td>". $row['phoneNo']."</td><td>". $row['Date']."</td><td>".$row["discription"]."</td></tr>"; 
        }
        echo "</table>";
    }
    else{
        echo "0 result";
    }
    $connection-> close();
    ?>
    </table>
    
</div>

</body>
</html>
