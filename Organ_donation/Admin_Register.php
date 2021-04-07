<?php
    $conn = mysqli_connect("localhost","root","","organ_donation");
if($conn==false)
{
die('Couldnt connect'.mysqli_error());
}
else
{
    $uid =$_REQUEST['uid'];
    $firstname = $_REQUEST['firstname'];
    $lastname =$_REQUEST['lastname'];
    $hosp_name =$_REQUEST['hosp_name'];
    $address1 =$_REQUEST['address1'];
    $address2 =$_REQUEST['address2'];
    $address3 =$_REQUEST['address3'];
    $address4 =$_REQUEST['address4'];
    $hosp_ID =$_REQUEST['hosp_ID'];
    $E_password =$_REQUEST['E_password'];
    $R_password =$_REQUEST['R_password'];


    if($E_password==$R_password){
    $sql="INSERT INTO admin_register(id,firstname,lastname,hosp_name,address1,address2,address3,address4,hosp_ID,E_password)
VALUES('$uid','$firstname','$lastname','$hosp_name','$address1','$address2','$address3','$address4','$hosp_ID','$E_password')";
    }
    else
    {
     echo "incorrect password";
    }


    if(mysqli_query($conn, $sql))
 {
    echo "Values saved successfully";
    header("location:choicephp.php");
 }
     else
{
    echo "Error"
     .mysqli_error($conn);
}
}
mysqli_close($conn);
?>