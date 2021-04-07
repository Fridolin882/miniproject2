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
</body>
<head>
<title>Heart</title>
<body>
<center>
<form action="Donor_Heart.php" method="POST">
<h1>Heart</h1><br></br>
<label for="uid">ID</label><br>
<input type="text" name="uid"><br><br>
<label for="cholestrol">Enter your cholestrol level:</label><br>
<input type="text" name="cholestrol"><br><br>
<label for="glucose">Enter your Glucose level:</label><br>
<input type="text" name="glucose"><br><br>
<label for="haemoglobin">Enter your Haemoglobin level:</label><br>
<input type="text" name="haemoglobin"><br><br>
<label for="metabolism">Enter your Metabolism level:</label><br>
<input type="text" name="metabolism"><br><br>
<label for="BP">Enter your Blood pressure level:</label><br>
<input type="text" name="BP"><br><br>
<label for="res_rate">Enter your Respiratory level:</label><br>
<input type="text" name="res_rate"><br><br>
<label for="pulse">Enter your Pulse rate level:</label><br>
<input type="text" name="pulse"><br><br>
<label for=="pH">Enter your pH level:</label><br>
<input type="text" name="pH"><br><br>
<label for="temp">Enter your Temperature level:</label><br>
<input type="text" name="temp"><br><br>
<input type="submit" name="submit">
</body>
</form>
</center>
</head>
</html>