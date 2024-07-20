<?php

// include "index.php";

// session_start();

// if($_SERVER["REQUEST_METHOD"] == "POST")
// {
//     if(isset($_POST["name"]))
//     {
//         $name = $_POST["name"];
//         $_SESSION["name"] = $name;
//     }
//     else{
//         echo"record is not inserted!<br>";
//     }

//     if(isset($_POST["email"]))
//     {
//         $email = $_POST["email"];
//         $_SESSION["email"] = $email;

//     }
//     else{
//         echo"record is not inserted!<br>";
//     }

//     // echo $name,$email;

//     $sql = "INSERT INTO `user` (`id`, `name`, `email`) VALUES (NULL, '$name', '$email');";

//     if(mysqli_query($con, $sql))
//     {
//         echo "record inserted! <br>";
//     }else
//     {
//         echo "record not inserted! <br>";
//     }


//     echo $name." ".$email."<br>";
//     echo "Sessions are ".$_SESSION["name"]." ".$_SESSION["email"]."<br>";

//     print_r($_SESSION);

// // session_start();
// // $_SESSION["email"] = $email;
// // $_SESSION["name"] = $name;

// //     // remove all session variables
// //     session_unset();

// //     // destroy the session
// //     session_destroy();

// }
// mysqli_close($con);

?>