<?php
$conn = new mysqli('localhost','root','','electiondatabase');
if($conn->connect_error){
    die('Connection failed:'.$conn->connect_error);
}
//else{
 //   echo "connection Succesfull\n";
//}
?>