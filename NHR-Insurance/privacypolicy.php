<?php
include_once 'header.php';
?>

<div class="TermsAndPrivcybody">
<div class="TermsAndPrivcyheader">
    <h1>PRIVACY  AND  POLICY</h1>
    
   </div>

  <div class="TermsAndPrivcy">
    <div class="image-column">
      <img src="images/policy.png" alt="Image" width="400">
    </div>
    <div class="description-column">
      
      <p>Insurance Management Company's website may collect certain information about visitors, including but not limited to your IP address, the URLs of the Web Sites and pages you visit, the times and dates of such visits, information about the computer hardware and software you use and other information that may be available.  Insurance Management Company's website may place "cookies" on your computer to recognize you on return visits to enhance your browser experience.  You may adjust your browser settings or use other means to prevent cookies from being placed on your computer, but doing so may result in reduced functionality.  The information collected about you is used to improve the selected content and services of this website.  Information set by way of this website is not secure and not considered confidential.  Any information you send over the internet is done at your own risk</p> <br>
      <button class="button" onclick="goToPreviousPage()">Previous Page</button>
    </div>
  </div>
</div>
<hr>
<script>
    function goToNextPage() {
      window.location.href = "privacypolicy.php";
    }

function goToPreviousPage() {
      window.location.href = "termsAndCondition.php";
    }
	

  </script>

<?php
include_once 'footer.php';
?>