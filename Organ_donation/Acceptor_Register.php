<?php
$conn=mysqli_connect("localhost","root","","organ_donation");
if(!$conn){
die('Couldnt connect'.mysql_error());
}
else
{
$uid=$_REQUEST['uid'];
$Acc_name=$_REQUEST['Acc_name'];
$sex=$_REQUEST['sex'];
$dob=$_REQUEST['dob'];
$age=$_REQUEST['age'];
$bg_grp=$_REQUEST['bg_grp'];
$Acc_mail=$_REQUEST['Acc_mail'];
$Address1=$_REQUEST['Address1'];
$Address2=$_REQUEST['Address2'];
$city=$_REQUEST['city'];
$pincode=$_REQUEST['pincode'];
$num=$_REQUEST['num'];
$sql="INSERT INTO acceptor_register (id,Acc_name,sex,dob,age,bg_grp,Acc_mail,Address1,Address2,city,pincode,num) 
VALUES ($uid,$Acc_name,$sex,$dob,$age,$bg_grp,$Acc_mail,$Address1,$Address2,$city,$pincode,$num)";

 if(mysqli_query($conn, $sql))
    {
        echo "Contact records inserted";
        header("location:Acceptor_choicephp.php");
    }
header("location:Acceptor_choice.php");
}
?>