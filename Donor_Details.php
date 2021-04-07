<?php
   $conn=mysqli_connect("localhost","root","","organ_donation");
if($conn==false)
{
die("Couldnt connect".mysqli_error());
}
   $id = $_REQUEST['uid'];
   $firstname = $_REQUEST['firstname'];
   $lastname = $_REQUEST['lastname'];
   $age = $_REQUEST['age'];
   $dob=$_REQUEST['dob'];
   $phone_no=$_REQUEST['phone_no'];
   $Email_ID=$_REQUEST['Email_ID'];
   $address1=$_REQUEST['address1'];
   $address2=$_REQUEST['address2'];
   $city=$_REQUEST['city'];
   $pincode=$_REQUEST['pincode'];
   $temp=$_REQUEST['temp'];
   $BP=$_REQUEST['BP'];
   $pulse_rate=$_REQUEST['pulse_rate'];
   $resp_rate=$_REQUEST['resp_rate'];
   $height=$_REQUEST['height'];
   $weight=$_REQUEST['weight'];
   $bg_grp=$_REQUEST['bg_grp'];


   $sql="INSERT INTO donor_details  
VALUES ('$id','$firstname','$lastname','$age','$dob','$phone_no','$Email_ID','$address1','$address2','$city','$pincode','$temp','$BP','$pulse_rate','$resp_rate','$height','$weight','$bg_grp')";


 if(mysqli_query($conn, $sql))
    {
        echo "Contact records inserted";
        header("location:Donor_choicephp.php");
    }
mysqli_close($conn);
header("location:Donor_choicephp.php");
?>