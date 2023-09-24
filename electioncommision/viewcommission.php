<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            view
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="viewcommission.php">election commission</a></li>
             <li><a class="dropdown-item" href="viewparty.php">party</a></li>
             <li><a class="dropdown-item" href="viewconstituency.php">constituency</a></li>
             
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Register
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="register.php">voters</a></li>
            <li><a class="dropdown-item" href="candidateregister.php">candidate</a></li>
            <li><a class="dropdown-item" href="partyregister.php">party</a></li>
            
          </ul>
        </li>
        
        <li class="nav-item active">
        <a class="nav-link" href="login.php">Voter <span class="sr-only"></span></a>
      </li>


    

    </ul>
  </div>
</nav>

    
<table border="1" width=100% bgcolor='white'>
            <tr>
                <th>CANDIDATE_ID</th>
                <th>CANDIDATE_FNAME</th>
                <th>CANDIDATE_MNAME</th>
                <th>CANDIDATE_LNAME</th>
                <th>VOTER_ID</th>
                <th>ADHAR</th>
                <th>PARTY_ID</th>
                <th>CONSTITUENCY_ID</th>
            </tr>
           <?php
            $conn = new mysqli('localhost','root','','electiondatabase');
            $sql = "SELECT * FROM electioncommission";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result-> fetch_assoc()) {
                    echo "<tr><td>".$row["candidate_no"] . "</td><td>" .$row["candidate_Fname"] . "</td><td>" .$row["candidate_Mname"] . "</td><td>" .$row["candidate_Lname"] . "</td><td>" .$row["V_id"] . "</td><td>" .$row["A_id"] . "</td><td>" .$row["Party_id"] . "</td><td>"  .$row["ct_id"] . "</td></tr>";

                }
            }
            else {
                echo "No Results";
            }
            $conn->close();

           ?>
        </table>
    </body>
<html>