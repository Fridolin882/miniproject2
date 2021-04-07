<?php
$conn =mysqli_connect("localhost","root","","organ_donation");
if($conn==false)
{
die('Couldnt connect'.mysqli_error());
}
$uid=$_REQUEST['uid'];
$blood=$_REQUEST['blood'];
$HLA=$_REQUEST['HLA'];
$cross=$_REQUEST['cross'];
$sql="INSERT INTO Donor_Kidney(id,blood,HLA,cross_match) VALUES('$uid','$blood','$HLA','$cross')";

if(mysqli_query($conn, $sql))
{
echo "Values entered successfully";
}
else
{
echo "Error"
     .mysqli_error($conn);
}
mysqli_close($conn);
?>