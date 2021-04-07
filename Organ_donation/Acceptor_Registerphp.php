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
<div class = "priority" align = "center">
	<h2 class="title"><font face= "Brush Script MT" size = 13px>Recipient Registration</font></h2>
<title>Acceptor registration</title>
<center>
<div>
<form action="Acceptor_Register.php" method="POST">
<fieldset>
        <legend><b>Registration Form</b></legend>
        <label for="id">ID</label><br>
        <input type="text" name="uid" id="uid" size="50"><br><br>
        <label for="Acc_name">Name of the Acceptor:</label><br>
        <input type="text" name="Acc_name" size="50"><br><br>
        <label for="sex">Sex:</label><br>
        <input type="text" name="sex" size="50"><br><br>
        <label for="dob">Date of birth:</label><br>
        <input type="Date" name="dob" size="50"><br><br>
        <label for="age">Age:</label><br>
        <input type="text" name="age" size="50"><br/><br/>
        <label for="bg_grp">Blood group</label><br>
        <input type="text" name="bg_grp" size="50"><br><br>
        <label for="Acc_mail">Acceptor mail Id:</label><br>
        <input type="email" name="Acc_mail" size="50"><br><br>
        <label>Street Address/ Landmark</label><br>
        <input type="text" name="Address1" size="50"><br></br>
        <label>Street Address line 2</label><br>
        <input type="text" name="Address2" size="50"><br></br>
        <label>City</label><br>
        <input type="text" name="city" size="50"><br></br>
        <label>Pincode</label><br>
        <input type="text" name="pincode" size="50"><br></br>
        <label for="num">Contact number:</label><br>
        <input type="text" name="num"><br/><br/>
        <input type="submit" value="submit">
</fielset>
</center>
<label>To choose the organ required</label>
<a href="Acceptor_choice.html">Click here</a>
    </body>
</html>
