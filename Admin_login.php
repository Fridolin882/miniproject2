<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organ_donation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$username=$_REQUEST['username'];
$Hosp_ID=$_REQUEST['Hosp_ID'];
$password=$_REQUEST['password'];
$count=0;

$sql = "SELECT COUNT(*) FROM Admin_Register WHERE 'Hosp_ID'= '$Hosp_ID'
                                     AND 'password'='$password'";
$result = $conn->query($sql);


if($sql==1){
  echo "Incorrect password";}
else{
 header("location:Choicephp.php");}
?>