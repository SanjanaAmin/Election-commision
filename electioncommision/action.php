
<?php

$FNAME= $_POST['FNAME'];
$MNAME= $_POST['MNAME'];
$LNAME= $_POST['LNAME'];
$ADHAR= $_POST['ADHAR'];
$AGE= $_POST['AGE'];
$CONTACT=$_POST['CONTACT'];
$ADDRESS=$_POST['ADDRESS'];

if(!empty($FNAME))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = " ";
    $dbname = "electiondatabase";

    
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
}

if(mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

}
else{
    $stmt = $conn->prepare("insert into voter(V_Fname,V_Mname,V_Lname,A_id,V_age,V_contact,V_address) values(?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssiss",$FNAME,$MNAME,$LNAME,$ADHAR,$AGE,$CONTACT,$ADDRESS);
    $stmt->execute();
    echo "Registration succesfull";
   
    $V_id='voter(V_id)';
    echo " Voter ID is $V_id";
    $stmt->close();
    $conn->close();

}
    ?>
