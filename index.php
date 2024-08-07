<?php
    
    include '_dbconnect.php';
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {   $update_id = $_POST['id'];
        $update_name = $_POST['name'];
        $update_email = $_POST['email'];
        $update_password = password_hash($_POST['password'],PASSWORD_DEFAULT);

        $sql = "UPDATE users SET name='$update_name', email='$update_email', password='$update_password' WHERE id='$update_id'";
        $result = mysqli_query($con,$sql);

        if($result)
        {
            header('Location:/php_crud/result.php');
        }else{
            echo "Update error <br>". mysqli_error($con);
        }

    }
    // echo "Hello World";

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
    <div class="container mt-5">
        <a href="result.php" class="btn btn-primary mb-3">Show</a>
        <form action="result.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
</body>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</html>