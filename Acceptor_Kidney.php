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
                                        echo "<li><a href='Donor_Detailsphp.php'>Acceptor Register</a></li>"; 
                                        echo "<li><a href='Acceptor_choice.php'>Check organs availability</a></li>"; 
                echo "</ul>"; 
			}
			?>
            <li> <a href="Admin_Login.html">Account</a>
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
<style>
table
{
border-style:solid;
border-width:2px;
border-color:pink;
}
</style>
<center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organ_donation";


echo "<table border='1'>
<tr>
<th>ID</th>
<th>Blood Group</th>
<th>HLA</th>
<th>Cross Match</th>
</tr>";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM donor_kidney";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>". $row["id"]."</td>";
    echo "<td>".$row["blood"]."</td>";
    echo "<td>". $row["HLA"]."</td>";
    echo "<td>".$row["cross_match"]."</td>";
    echo "</tr>";
  }
    echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>