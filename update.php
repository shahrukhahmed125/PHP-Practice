<?php
    include '_dbconnect.php';
    

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Core Php Crud</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body>
    <?php
            if(isset($_GET['edit_id']))
            {
                $id = $_GET['edit_id'];
                $sql = "SELECT * FROM users WHERE id = $id"; 
        
                $sql_res = mysqli_query($con, $sql);
        
                $row = mysqli_fetch_assoc($sql_res);
        
                $name = $row['name'];
                $email = $row['email'];
                $password = $row['password'];
        
                echo 
                "    <div class='container mt-5'>
        <a href='result.php' class='btn btn-primary mb-3'>Show</a>
        <form action='index.php' method='POST'>
        <div class='mb-3'>
            <input type='hidden' name='id' value='$id'>

            <label for='exampleInputName' class='form-label'>Name</label>
            <input type='text' class='form-control' id='exampleInputName' name='name' value='$name'>
        </div>
        <div class='mb-3'>
            <label for='exampleInputEmail1' class='form-label'>Email address</label>
            <input type='email' class='form-control' id='exampleInputEmail1' name='email' value='$email'>
        </div>
        <div class='mb-3'>
            <label for='exampleInputPassword1' class='form-label'>Password</label>
            <input type='password' class='form-control' id='exampleInputPassword1' name='password' value='$password'>
        </div>
        <button type='submit' class='btn btn-warning'>Update</button>
        </form>
        
    </div>";
            }
        
    ?>

</body>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</html>