<?php
$conn=mysqli_connect("localhost","root","","organ_donation");
if($conn==false)
{
die('Couldnt connect'.mysqli_error());
}
else
{
$uid=$_REQUEST['uid'];
$Serum=$_REQUEST['Serum'];
$bilirubin=$_REQUEST['bilirubin'];
$ss=$_REQUEST['ss'];
$sql="INSERT INTO MELD_Liver (id,Serum,bilirubin,ss)
 VALUES('0','$Serum','$bilirubin','$ss')";
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
?>