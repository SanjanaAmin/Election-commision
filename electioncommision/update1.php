<?php
include("connect.php");
global $R;

$V=$_POST['VID'];
$A=$_POST['FNAME'];
$B=$_POST['MNAME'];
$C=$_POST['LNAME'];
$D=$_POST['ADHAR'];
$E=$_POST['AGE'];
$Z=$_POST['CONTACT'];
$P=$_POST['ADDRESS'];

$up=("Update voter set V_Fname='$A',V_Mname='$B',V_Lname='$C',A_id='$D',V_age='$E',V_contact='$Z',V_address='$P' where V_id=$V");

$abc=mysqli_query($conn,$up);

if($abc)
{
    echo "Record updated succesfully";
}
else{
    echo "ERRORR : please check values";
}

?>

