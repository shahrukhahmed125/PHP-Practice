<?php

// echo "Connecting to MySql through php <br>";

/*
ways to connect to mysql:
1. MYSQLi extension (specificly only for mysql database using OOP / using functions directly) 
2. PDO (multiple databases)
*/

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
    echo "Connection is Successfull! <br>";
}

// create database

// $sql = "CREATE DATABASE db_SRA3";
// $result = mysqli_query($conn, $sql);

// checking the created database
// if($result)
// {
//     echo "The database was created Succussfully! <br>";
// }
// else{
//     echo "The database was not created Succussfully because --->  ".mysqli_error($conn);
// }

// echo "<br>";
// echo "This is result";
// echo var_dump($result);

// creating table in the database

// $sql = "CREATE TABLE `db_sra`.`trip` ( `id` INT(50) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(50) NOT NULL , `Destination` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`))";

// $result = mysqli_query($conn,$sql);

// if($result)
// {
//     echo "The table was created successfully! <br>";
// }
// else{
//     echo "The table was not created successfully because --->". mysqli_error($conn);
// }


// $sql = "INSERT INTO `trip` (`Name`, `Destination`) VALUES ('Shahzaib Ali', 'Karachi')";

// $result = mysqli_query($conn,$sql);

// if($result)
// {
//     echo "The record had been inserted successfully! <br>";
// }
// else{
//     echo "The record had been inserted successfully because --->". mysqli_error($conn);
// }

// inserting with variables

$name = "Zain Ul Abideen";
$destibation = "Russia";

$sql = "INSERT INTO `trip` (`Name`, `Destination`) VALUES ('$name', '$destibation')";

$result = mysqli_query($conn,$sql);

if($result)
{
    echo "The record had been inserted successfully! <br>";
}
else{
    echo "The record had been inserted successfully because --->". mysqli_error($conn);
}

?>