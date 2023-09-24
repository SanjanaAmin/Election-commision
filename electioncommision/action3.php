
<?php

$PARTY_NAME= $_POST['PARTY_NAME'];

if(!empty($PARTY_NAME))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = " ";
    $dbname = "electiondatabase";

    
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if(mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

}
else{
    $SELECT = "SELECT party_name from Party where Party_name=? Limit 1";
    $INSERT = "INSERT Into party(Party_name) values (?)";
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s",$PARTY_NAME);
    $stmt->execute();
    $stmt->bind_result($PARTY_NAME);
    $stmt->store_result();
    $rnum= $stmt->num_rows;

    if($rnum==0)
    {
        $stmt->close();
        $stmt= $conn->prepare($INSERT);
        $stmt->bind_param("s",$PARTY_NAME);
        $stmt->execute();
        echo "Registration succesfull";
    }
    else{
        echo "Party already exists";
    }
    $stmt->close();
    $conn->close();
}

}
else
{
    echo "All fields are required";
    die();
}

    ?>
