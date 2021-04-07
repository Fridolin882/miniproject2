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
                                        echo "<li><a href='Donor_Detailsphp.php'>Donor Register</a></li>";
                                        echo "<li><a href='Acceptor_choice.php'>Check organs availability</a></li>";  
                echo "</ul>"; 
			}
			?>
            <li> <a href="Admin_Loginphp.php">Account</a>
                <ul>
				<?php
					if(!$username){
						echo "<li><a href='Admin_Loginphp.php'>Login</a></li>";
                                                echo "<li><a href='Thanks.html'>Logout</a></li>";  }
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
<h2 class="title"><font face= "Brush Script MT" size = 13px>Admin Registration</font></h2>
<head>
<title>Registration form for Admin</title>
<body>
</head>
<center>
<div>
<form action="Admin_Register.php" method="post">
<fieldset> 
<legend><b>Registration Form</b></legend>
<label for="id">ID</label><br>
<input type="text" name="uid" id="uid" size="50"><br><br>
<label for="firstname">First name</label><br>
<input type="text" name="firstname" id="firstname" size="50"><br><br>
<label for="lastname">Last name</label><br>
<input type="text" name="lastname" id="lastname" size="50"><br><br>
<label for="hosp_name">Name of the hospital</label><br>
<input type="text" name="hosp_name" id="hosp_name" size="50"><br><br>
<legend><b>Address</b></legend>
<label for="address1">Line1 Streetname</label><br>
<input type="text" name="address1" id="address1" size="50"><br><br>
<label for="address2">Line2 Cityname</label><br>
<input type="text" name="address2" id="address2" size="50"><br><br>
<label for="address3">Line3 Districtname</label><br>
<input type="text" name="address3" id="address3" size="50"><br><br>
<label for="address4">Line4 Statename</label><br>
<input type="text" name="address4" id="address4" size="50"><br><br>
<label for="hosp_ID">Hospital ID</label><br>
<input type="text" name="hosp_ID" id="hosp_ID" size="50"><br><br>
<label for="E_password">Enter password</label><br>
<input type="password" name="E_password" id="E_password" size="50"><br><br>
<label for="R_password">Repeat password</label><br>
<input type="password" name="R_password" id="R_password" size="50"><br><br>
<input type="submit" name="submit" value="Submit" ><br><br>
</div>
</fieldset> 
<p>&nbsp;</p>
<label>Already having an account</label>
<a href="Admin_loginphp.php">Login</a>
</center>
</form>
</body
</html>
