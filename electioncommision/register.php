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



<form action="action.php" method="POST"
                style="border: lpx solid #ccc">
                <hr>
                <div class="container">
                    <h1> Register now!!</h1>
                    <p>PLease fill in this form to create a voter id.</p>
                    
                    <label for="fname"><b>FNAME</b></label>
                    <input type="text" placeholder="Enter first name" name="FNAME" required>
                     <br>
                    <label for="mname"><b>MNAME</b></label>
                    <input type="text" placeholder="Enter middle name" name="MNAME">
                     <br>
                    <label for="lname"><b>LNAME</b></label>
                    <input type="text" placeholder="Enter last name" name="LNAME" required>
                    <br>
                    <label for="Adhar"><b>ADHAR</b></label>
                    <input type="text" placeholder="Enter adhar no" name="ADHAR" required>
                    <br>
                    <label for="age"><b>AGE</b></label>
                    <input type="number" placeholder="Enter age" name="AGE" required>
                    <br>
                    <label for="contact"><b>CONTACT</b></label>
                    <input type="text" placeholder="Enter contact" name="CONTACT" required>
                    <br>
                    <label for="address"><b>ADDRESS</b></label>
                    <input type="text" placeholder="Enter address" name="ADDRESS" required>
                    <br>
                    <label>
                    <input type="checkbox" checked="checked" name="remember">
                    Remember me
                    </label>
                    <p>By creating an account you agree to our <a href="#" style="color: dodgerblue">Terms & Conditions</a></p>
                
                <div class="clearfix">
                   <button type="submit" class="registerbtn" name="insert">Register</button>
                </div>
            </div>
        </form>


        
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
</div>
</body>
</html>