<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
  </head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <body>

  <!-- navbar -->

  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Contact us</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/php_intro/GET.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--End navbar -->




<?php

if($_SERVER["REQUEST_METHOD"] == 'POST')  /// checking if your method is post or get 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];



    // submit in database code

    // Connecting to MYsql database

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_sra";

    // creating a connection

    $conn = mysqli_connect($servername, $username, $password, $database);

    // die if not connected

    if(!$conn)
    {
        die("Sorry you failed to connect:".mysqli_connect_error());
    }
    else  // else is no neccessary coz die function is used
    {
        // echo "Connection is Successfull! <br>";
    }

    $sql = "INSERT INTO `contact_us` (`Name`, `Email`, `Concern`, `dt`) VALUES ('$name', '$email', '$desc', current_timestamp());";

    $result = mysqli_query($conn,$sql);

    if($result)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your request is submited.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
      </div>';
    }
    else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing a technical issue and your entery can not be submitted, we regret the inconvinience.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
      </div>';
    }


}


?>
<div class="container" style="padding:100px;">
    <h1 class="display-5">Please contact us for your concern!</h1>
<form action="/php_intro/saving_data.php" method="post">
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Name</label>
    <input type="name" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="desc" class="form-label">Description</label>
    <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>