<?php
include_once "header.php";
?>
<div class="claim_container">
    <div class="claim_title">
        <h2 class="c_title">Claim Form</h2>
    </div>

    <div class="claimbox">
        <form action="include/claim.inc.php" method="post" enctype="multipart/form-data" class="claimform" >
        <input type="text" placeholder="Vehicle Number" class="claimTextbox_long" name="vhicleNO">
        <div class="flex_display">
            <div class="subbox">
                <p class="claims_heading">Intemdiary/agent :</p>
                <input type="text" placeholder="First Name" class="claimTextbox" name="fname">
            </div>
            <div class="subbox">
                <br><p class="claims_heading"></p><input type="text" placeholder="Last Name" class="claimTextbox" name="lname">
            </div>
        </div>
        <div class="flex_display">
            <div class="subbox">
                <p class="claims_heading">Name Of Policyholder :</p>
                <input type="text" placeholder="First Name" class="claimTextbox" name="poFname">
            </div>
            <div class="subbox">
                <br><p class="claims_heading"></p><input type="text" placeholder="Last Name" class="claimTextbox" name="poLname">
            </div>
        </div>
        <div class="heading_p">
        <p class="claims_heading">Address :</p>
        <input type="text" placeholder="Street Address" class="claimTextbox_long1" name="strAddress">
        <input type="text" placeholder="Street Address Line 2" class="claimTextbox_long1" name="strAddressline"></div>
        <div class="flex_display1">
            <div class="floatleft">
                <input type="text" placeholder="City" class="claimTextbox_" name="city"><br>
                <input type="text" placeholder="Postel/Zip Code" class="claimTextbox" name="postelid"><br>
            </div>
                <div class="floatleft">
                <input type="text" placeholder="Region" class="claimTextbox" name="region"><br>
            </div>   
        </div>
        <div class="flex_display1">
            <div class="c_subheadings">
                <p class="claims_heading">E-mail :</p>
                <input type="text" class="claimTextbox" name="cemail"><br>
            </div>
            <div class="c_subheadings">
                <p class="claims_heading">Phone :</p>
                <input type="text" class="claimTextbox" name="cphone"><br>
            </div>
        </div>
        <div class="flex_display2">
            <div class="c_subheadings">
                <p class="claims_heading">Date :</p>
                <input type="date" class="claimTextbox" name="date"><br>
                <textarea class="claims_textArea" placeholder="Description...." name="discription"></textarea><br>
            </div>
            <div class="c_subheadings">
                <p class="claims_heading">Accident image : </p>
                <input type="file" class="claimTextbox" name="image"><br>
            </div>
        </div>

        <button class="claims_subBtn" name="submit">Submit</button>

        </form>
        
    </div>
</div>

<?php
include_once "footer.php";
?>


    