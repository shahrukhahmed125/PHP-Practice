<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "php_crud";


    $con = mysqli_connect($servername, $username, $password, $database);

    if(!$con)
    {
        die("Faild to connect ".mysqli_connect_error());
    }
    // else{
    //     echo "Connected Successfully! <br>";
    // }

?>