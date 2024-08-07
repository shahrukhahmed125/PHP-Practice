<?php
    include '_dbconnect.php';

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $insert_name = $_POST['name'];
        $insert_email = $_POST['email'];
        $insert_password = password_hash($_POST['password'],PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, email, password) VALUES ('$insert_name', '$insert_email', '$insert_password')";
        $result = mysqli_query($con,$sql);

        if($result)
        {
            header('Location:/php_crud/result.php');
            echo"inserted successfully! <br>";
        }else{
            echo "Insert error <br>". mysqli_error($con);
        }

    }



?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>All User Record</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container mt-5">
        <a href="index.php" class="btn btn-success">Create</a>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    $show_sql = "SELECT * FROM users;";
                    $show_result = mysqli_query($con, $show_sql);
                
                    while($row = mysqli_fetch_assoc($show_result))
                    {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];

                        echo "
                        <tr>
                        <th scope='row'>$id</th>
                        <td>$name</td>
                        <td>$email</td>
                        <td><a href='/php_crud/result.php?delete_id=$id' class='btn btn-danger'>Delete</a> <a href='/php_crud/update.php?edit_id=$id' class='btn btn-warning'>Update</a></td>
                        </tr>
                        
                        ";
                    }
                
            ?>
        </tbody>
        </table>
    </div>
</body>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</html>
<?php
        if(isset($_GET['delete_id']))
        {
            $id = $_GET['delete_id'];
            $delete_sql = "DELETE FROM users WHERE id = $id;";
            $delete_result = mysqli_query($con, $delete_sql);
    
            if($delete_result)
            {
                header('Location: /php_crud/result.php');
            }else{
                echo "Deleting Error ". mysqli_error($con);
            }
        }
    
?>