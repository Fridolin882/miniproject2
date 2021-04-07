<?php
$conn= mysqli_connect("localhost","root","","organ_donation");
$uid =$_REQUEST['uid'];
$cholestrol=$_REQUEST['cholestrol'];
$glucose=$_REQUEST['glucose'];
$haemoglobin=$_REQUEST['haemoglobin'];
$metabolism=$_REQUEST['metabolism'];
$BP=$_REQUEST['BP'];
$res_rate=$_REQUEST['res_rate'];
$pulse=$_REQUEST['pulse'];
$pH=$_REQUEST['pH'];
$temp=$_REQUEST['temp'];
$sql="INSERT INTO Donor_heart (id,cholestrol,glucose,haemoglobin,metabolism,BP,res_rate,pulse,pH,temp) 
VALUES ('$uid','$cholestrol','$glucose','$haemoglobin','$metabolism','$BP','$res_rate','$pulse','$pH','$temp')";

if(mysqli_query($conn, $sql))
{
echo "Contacts records inserted!!!!";
} 
else{
echo "couldnt connect".mysqli_error($conn);}
?>