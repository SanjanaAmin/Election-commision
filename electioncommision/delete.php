<?php
include("connect.php");
if(isset($_GET['id']))
{
    echo $_GET['id'];
    $userpr=$_GET['id'];
    
    $sql="delete from `voter` where V_contact=$userpr";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo "deleted succesfully";
        //header("Location : index.php");
    }
    else{
       die('Connection failed:'.$conn->connect_error);
    }
}
?>