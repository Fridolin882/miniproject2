<?php
error_reporting (E_ALL ^ E_NOTICE); 
session_start(); 
$userID = $_SESSION['userID'];  
$username = $_SESSION['username']; 
$databaseTitle = $_SESSION['title']; 
$databaseUserType = $_SESSION['userType']; 
$datebasePatientFlag = $_SESSION['patientFlag']; 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Organ Donation</title>
  <link rel = "stylesheet" type = "text/css" href = "style.css"/>
</head>
<body>
<div id="nav">
    <div id="nav_wrapper">
        <ul>
			<li><a href="index.php"><img src = "https://townehomecare.com/wp-content/uploads/2017/04/organ-donation.jpg" width = "40" height = "40" alt = "heart and hands"  /></a></li>
            <li><a href="index.php">Home</a></li>
            <li> <a href="about.php">About Us</a></li>
            <li> <a href="faq.php">FAQ</a></li>
			<?php 
			if(!$userID)
			{
			echo "<li> <a href='Admin_Registerphp.php'>Register</a>"; 
				echo "<ul>"; 
					echo "<li><a href='Admin_Registerphp.php'>Admin Register</a></li>"; 
					echo "<li><a href='Acceptor_Registerphp.php'>Acceptor Register</a></li>"; 
                                        echo "<li><a href='Donor_Detailsphp.php'>Donor Registration</a></li>";
                                        echo "<li><a href='Acceptor_choice.php'>Check organs availability</a></li>";  
                echo "</ul>"; 
			}
			?>
            <li> <a href="Admin_Loginphp.php">Account</a>
                <ul>
				<?php
					if(!$username){
						echo "<li><a href='Admin_Loginphp.php'>Login</a></li>"; 
                                                echo "<li><a href='Thanks.html'>Logout</a></li>"; }
					else
						echo "<li><a href ='profile.php'>{$username}'s Profile</a></li>";
					?>
				<?php
					if($userID && $databaseUserType != "0") 
					{ echo "<li><a href='reports.php'>Reports</a></li>"; 
					}
					if($userID && ($databaseUserType == "1"))
					{
						echo "<li><a href='matching.php'>Matching</a></li>";
					}
					?>
					<?php
					if($userID && ($databaseUserType == "2"))
					{?>
					<li><a href="scheduler.php">Scheduler</a></li>
					<?php
					}
					?>
					<?php
					if($userID)
					{ ?>
						<li><a href='POA_Management.php'>Power Of Attorney Management</a></li>
						<li><a href='logout.php'>Logout</a></li> 
					<?php }
					?>
                </ul>
            </li>
			<?php
				if($userID)
				{
					echo "<li> <a href='profile.php'>Hello, {$username}</a>"; 
				}
			?>
        </ul>
    </div>
    <!-- Nav wrapper end -->
</div>
<!-- Nav end -->
	<p>&nbsp;</p>
<title>Donor Registration</title>
<div class = "priority" align = "center">
	<h2 class="title"><font face= "Brush Script MT" size = 13px>Donor and Recipient Registration</font></h2>
	<p><p> <b> Make sure all fields are filled before submitting. </b> <p> 
        <form action="Donor_Details.php" method="post"> 
<fieldset>
	<legend><b>Personal details</b></legend>
        <label for="uid">ID</label><br>
        <input type="text" name="uid" size="50"><br><br>
        <label for="firstname">First name</label><br>
        <input type="text" name="firstname" size="50"><br></br>
        <label for="lastname">Last name</label><br>
        <input type="text" name="lastname" size="50"><br></br>
        <label for="age">Age</label><br>
        <input type="text" name="age" size="50"><br></br>
        <label for="dob">Date of birth</label><br>
        <input type="Date" name="dob"><br></br>
        <label for="phone_no">Phone no</label><br>
        <input type="Phone" name="phone_no" size="50"><br></br>
        <label for="Email_ID">Email_ID</label><br>
        <input type="Email_ID" name="Email_ID" size="50"><br></br>
        <label for="address1">Street Address/ Landmark</label><br>
        <input type="text" name="address1" size="50"><br></br>
        <label for="address2">Street Address line 2</label><br>
        <input type="text" name="address2" size="50"><br></br>
        <label for="city">City</label><br>
        <input type="text" name="city" size="50"><br></br>
        <label for="pincode">Pincode</label><br>
        <input type="text" name="pincode" size="50"><br></br>
    </fieldset> 
    <p>&nbsp;</p>
    <fieldset>
        <legend><b>Medical Data</b></legend>
        <label for="temp">Temperature(c)</label><br>
        <input type="text" name="temp"><br><br>
        <label for="BP">BP(mmHg)</label><br>
        <input type="text" name="BP"><br><br>
        <label for="pulse_rate">Pulse rate(bpm)</label><br>
        <input type="text" name="pulse_rate"><br><br>
        <label for="resp_rate">Respiratory rate(bpm)</label><br>
        <input type="text" name="resp_rate"><br><br>
        <label for="height">Height(ft)</label><br>
        <input type="text" name="height" size="50"><br></br>
        <label for="weight">Weight(kg)</label><br>
        <input type="text" name="weight" size="50"><br></br>
        <label for="bg_grp">Blood group</label>
       <input type="text" name="bg_grp" size="50"><br></br>
   </fieldset> 
   <p>&nbsp;</p>
   <fieldset>
       <legend><b>Vital signs</b></legend>
          <legend><b>Family history illness</b></legend>
          <input type="checkbox" name="Asthma"/>Asthma<br>
          <input type="checkbox" name="Cardio-vascular disease"/>Cardio-vascular disease<br>
          <input type="checkbox" name="Diabetes Mellitus"/>Diabetes mellites<br>
          <input type="checkbox" name="Hypertension"/>Hypertension<br>
          <input type="checkbox" name="Tuberculosis"/>Tuberculosis<br>
   </fieldset> 
   <p>&nbsp;</p>
   <fieldset>
      <legend><b>Organ donation details</b></legend>
        <legend><b>Specific purpose</b></legend>
        <input type="checkbox" name="Medical Transplant"/>Medical Transplant<br>
        <input type="checkbox" name="Education/ research"/>Education / Research<br>
        <input type="checkbox" name="Both"/>Both<br><br>
    </fieldset> 
    <p>&nbsp;</p>
    <fieldset>
        <legend><b>Acknowledgement and terms</b></legend>
        <input type="checkbox" name=""/>I confirm that the information provided in this document is accurate and true<br>
        <input type="checkbox" name=""/>I allow my organs to be donated for medical transplant or educational/ research purposes<br>
        <input type="checkbox" name=""/>I acknowledge that I have to inform my family about this regisration<br>
        <input type="checkbox" name=""/>I confirm that I always need to keep the donor card and the document that came with it<br>
        <input type="checkbox" name=""/>I allow my information to be submitted in donor registry<br><br>
        <input type="submit" name="submit"><br><br>
</fieldset>
</div>
      </form>
  </body>
</center>
</head>
</html>
