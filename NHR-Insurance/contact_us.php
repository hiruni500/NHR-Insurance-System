<?php
include_once "header.php";
?>


<div class="contact_usContent">
       <div class="_contactUs">
            <div class="contactus_img">
                <img src="images/contact_us_image.png" alt="image">
            </div>
            <div class="mycontact">
            <form action="include/contactus.inc.php" method="POST" class="contact_us_form">
                <h2 CLASS="heading_contact_us">Contact Us</h2>
                <p class="question">Any question or remarks? Just write us a message!</p>
                <input type="text" placeholder="Enter Your Name" class="contactUsTextbox" name="uname"><br> 
                <input type="text" placeholder="Enter E-mail Address" class="contactUsTextbox" name="uemail"><br> 
                <textarea class="contactUsTextArea" placeholder="Message" name="discription"></textarea>

                <div class="sub-button-box">
                    <button class="sub-button">Send</button>
                </div>
            
            </form>
            </div>
            <div class="contactusinfo">
                <div class="telephoneInfo">
                    <h3 >Telephone:</h3><br>
                    <p>0753 391 069<br>
                       0766 329 975<br>
                    </p>
                </div>

                <div class="E-mailInfo">
                    <h3 >E-mail:</h3>
                    <p>NHRinsurance@gmail.com<br>
                    </p>
                </div>
                
                <div class="LocationInfo">
                    <h3 >Location:</h3>
                    <p>378/2,<br>
                        Pragathi Mawatha,<br>
                        Kahathuduwa.<br>
                    </p>
                </div>
            </div>
        </div>
</div>


<?php
include_once "footer.php";
?>