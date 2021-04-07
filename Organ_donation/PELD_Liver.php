<?php
    $conn = mysqli_connect("localhost","root","","organ_donation");
if($conn==false)
{
die('Couldnt connect'.mysqli_error());
}
else
{
$albumin=$_REQUEST['albumin'];
$bb=$_REQUEST['bb'];
$INR=$_REQUEST['INR'];
$sql="INSERT INTO PELD_Liver (id,albumin,bb,INR)
 VALUES('0','$albumin','bb','INR')";
 if(mysqli_query($conn, $sql))
 {
    echo "Values saved successfully";
    header("location:Thanks.html");
 }
     else
{
    echo "Error"
     .mysqli_error($conn);
}
}