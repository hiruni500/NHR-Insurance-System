<!--include the navigation bar-->
<?php
    include_once 'header.php';  
?>

</div>
<header>
<div class="contant">

<!--read more button and discription and side image-->
            
            <div class="description">
                <h1>Vehicle <br> <span>Insurance</span></h1>
                <p>Welcome to NHR Insurance! Are you in search of reliable and comprehensive vehicle insurance coverage? 
                    Look no further! At NHR Insurance, we specialize in providing top-notch insurance solutions for a wide range of vehicles, including cars, motorcycles, and more.
                     With our user-friendly website, you can easily explore, compare, and choose the ideal policy that suits your needs. Trust us for peace of mind on the road.</p><br>

                <a href="services.php" class="Read_more">Read More...</a>

            </div>
            <div class="background-imge">
                <img src="images/pngeggnew.png" alt="">
            </div>
        </div>

    </header>



    <!--image slider-->
    
    <div class="cotainer">
        <h1 class="heder1">Our Services</h1>
        <div class="weapper">
            <i id="left" class="fa-solid fa-angle-left"><</i>
            <ul class="carousel">
                <li class="card">
                    <div class="img"><a href="services.php"><img src="images/service 1.png" alt="" draggable="false"></a></div>
                    <h2>Comprehensive Coverage</h2>
                    
                </li>
                <li class="card">
                    <div class="img"><a href="services.php"><img src="images/img3.png" alt="" draggable="false"></a></div>
                    <h2>Liability Coverage</h2>
                    
                </li>
                <li class="card">
                    <div class="img"><a href="services.php"><img src="images/service 3.png" alt="" draggable="false"></a></div>
                    <h2>Personal Injury Protection (PIP)</h2>
                    
                </li>
                <li class="card">
                    <div class="img"><a href="services.php"><img src="images/service 6.png" alt="" draggable="false"></a></div>
                    <h2>Rental Car Reimbursement</h2>
                    
                </li>
                <li class="card">
                    <div class="img"><a href="services.php"><img src="images/img2.png" alt="" draggable="false"></a></div>
                    <h2>Roadside Assistance</h2>
                    
                </li>
                <li class="card">
                    <div class="img"><a href="services.php"><img src="images/service 4 new.png" alt="" draggable="false"></a></div>
                    <h2>Uninsured/<br>Underinsured Motorist Coverage</h2>
                    
                </li>
                <li class="card">
                    <div class="img"><a href="services.php"><img src="images/service 7.png" alt="" draggable="false"></a></div>
                    <h2>Online Claims and Support</h2>
                    
                </li>
                
            </ul>
            <i id="right" class="fa-solid fa-angle-right">></i>
        </div>

    </div>


    <!--about us session -->


    <div class="allaboutus">
    <div class="aboutus">
        <h1>About Us</h1>
        <p>Welcome to NHR Insurance, your trusted source for comprehensive coverage and exceptional service.</p>
    </div>
    <section class="imganddescription">
        <img src="images/30190995.jpg" alt="">
        <div class="aboutusdiscription">
            <h2>Our Story and Values</h2>
            <p>The NHR which was registered as a group business by Mr. W.B.N.Perera in 1982, has won a prestigious name today.
            This institution, which was started with the aim of saving all Sri Lankan people from the risk of road accidents, has spread over a wide range today.</p>
                <button class="read-more-btn" onclick="gotoaboutuspage()">Read More</button>
        </div>
        
</section>
</div>

<!--contact us session -->

<div class="contectussection">
<div class="contactUs">
    <div class="content">
       <div class="left-side">
        <div class="address details">
        <div class="info_"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
           <div class="topic">address</div>
           <div class="text-one">378/2, pragathi mw</div>
           <div class="text-two">kahathuduwa</div>
        </div>

        <div class="phone details">
        <div class="info_"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
           <div class="topic">phone</div>
           <div class="text-one">+94 753 391 069</div>
           <div class="text-two">+94 766 329 975</div>
        </div>

        <div class="email details">
           <div class="topic">email</div>
           <div class="text-one">bnperera9@gmail.com</div>
           <div class="text-two">nhrinsurens21@gmail.com</div>
        </div>
     </div> 
     
     <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial,you can send me message from here.
            It's my pleasure to help you. </p>
     
     <form action="include/contactus.inc.php" method="POST">
        <div class="input-box">
            <input type="text" name="uname" placeholder="Enter your name">

        </div>

        <div class="input-box">
            <input type="text" name="uemail" placeholder="Enter your email">
            
        </div>

        <div class="input-box message-box">
            
        <textarea name="discription" placeholder="Message"></textarea> 
        </div>

        
            
        <button class="submitbtn" onclick="alert('Successfully send message !')">Send</button>
            
        


     </form>

    </div>
</div>
</div>

<script>function gotoaboutuspage()
{
    window.location.href="about_us.php";
}</script>

<!--include the footer session-->

<?php
    include_once 'footer.php';
?>