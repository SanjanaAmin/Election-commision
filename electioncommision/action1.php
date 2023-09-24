
<?php

$CANDIDATE_FNAME= $_POST['CANDIDATE_FNAME'];
$CANDIDATE_MNAME= $_POST['CANDIDATE_MNAME'];
$CANDIDATE_LNAME= $_POST['CANDIDATE_LNAME'];
$VOTER_ID= $_POST['VOTER_ID'];
$ADHAR= $_POST['ADHAR'];
$PARTY_ID= $_POST['PARTY_ID'];
$CONSTITUENCY_ID= $_POST['CONSTITUENCY_ID'];

if(!empty($CANDIDATE_FNAME))
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
        $stmt = $conn->prepare("insert into electioncommission(candidate_Fname,candidate_Mname,candidate_Lname,V_id,A_id,Party_id,ct_id) values(?,?,?,?,?,?,?)");
        $stmt->bind_param("sssisis",$CANDIDATE_FNAME,$CANDIDATE_MNAME,$CANDIDATE_LNAME,$VOTER_ID,$ADHAR,$PARTY_ID,$CONSTITUENCY_ID);
        $stmt->execute();
        echo "Registration succesfull";
        $stmt->close();
        $conn->close();
    
    }
}

    ?>
