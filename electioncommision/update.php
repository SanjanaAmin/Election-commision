<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="main">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><b>ELECTION COMMISSION</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Logout <span class="sr-only">(current)</span></a>
      </li>

      
        


    

    </ul>
  </div>
</nav>

<?php
include("connect.php");
global $R;
$R=$_GET['id'];
//$F=$_POST["CONTACT"];

$sq="Select * from voter where V_contact=$R";

$Table=mysqli_query($conn,$sq);
$Row=mysqli_fetch_array($Table);

$VID=$Row["V_id"];
$FN=$Row["V_Fname"];
$MN=$Row["V_Mname"];
$LN=$Row["V_Lname"];
$AID=$Row["A_id"];
$AGE=$Row["V_age"];
$VC=$Row["V_contact"];
$VA=$Row["V_address"];


?>
<form action="update1.php" method="POST" name="form1"
                style="border: lpx solid #ccc">
                <hr>
                <div class="container">
                    <h1> UPDATE</h1>
                    
                    <label for="voter"><b>V_ID</b></label>
                    <input type="text" class="txtField" name="VID" value="<?php echo $VID?>" readonly >
                     <br>
                    <label for="fname"><b>FNAME</b></label>
                    <input type="text" class="txtField" name="FNAME" value="<?php echo $FN?>" readonly >
                     <br>
                    <label for="mname"><b>MNAME</b></label>
                    <input type="text" name="MNAME" class="txtField" value="<?php echo $MN;?>"readonly>
                     <br>
                    <label for="lname"><b>LNAME</b></label>
                    <input type="text" placeholder="Enter last name" name="LNAME" value="<?php echo $LN ?>"readonly>
                    <br>
                    <label for="Adhar"><b>ADHAR</b></label>
                    <input type="text" placeholder="Enter adhar no" name="ADHAR" value="<?php echo $AID; ?>"readonly>
                    <br>
                    <label for="age"><b>AGE</b></label>
                    <input type="text" placeholder="Enter age" name="AGE" value="<?php echo $AGE; ?>" readonly>
                    <br>
                    <label for="contact"><b>CONTACT</b></label>
                    <input type="text" placeholder="Enter contact" name="CONTACT" value="<?php echo $VC; ?> ">
                    <br>
                    <label for="address"><b>ADDRESS</b></label>
                    <input type="text" placeholder="Enter address" name="ADDRESS" value="<?php echo $VA?>" >
                    <br>
                    <label>
                   
                
                <div class="clearfix">
                   <button type="submit" class="btn btn-danger w-100" name="submit" value="update" >UPDATE</button>
                </div>
            </div>
        </form>


        
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
</div>
</body>
</html>