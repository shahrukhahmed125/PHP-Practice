<?PHP

 
$showError = "false";
if(!empty($_SERVER['REQUEST_METHOD'] == "POST"))
{
    include '_dbconnect.php';
    $user_email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];

    // checking whether this email exists

    $existsql = "SELECT * FROM `users` WHERE `user_email` = '$user_email'";
    $result = mysqli_query($conn, $existsql);
    $numRows = mysqli_num_rows($result);
    if($numRows > 0)
    {
        $showError = "Email is already exist";
    }
    else
    {
        if($pass == $cpass)
        {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql  = "INSERT INTO `users` (`user_email`,`user_pass`,`timestamp`) VALUES ('$user_email','$hash',current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if($result)
            {
                $showAlert = true;
                header("Location: /forum/index.php?sigupsucess=true");
                exit();
            }

        }
        else
        {
            $showError = "Password does not match";

        }
    }
    header("Location: /forum/index.php?sigupsucess=false&error=$showError");
}
else
{
    $showError = "Must enter email and password for signup";

}


?>