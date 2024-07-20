<?php

// --- Deleting the record from the database using php ---

// connecting to database

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_sra";

// creating a conection

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
    die("Sorry you are failed to connect ".mysqli_connect_error());
}
else
{
    echo "Connection was successfull! <br>";
}

// deleting the record from the database using mysql query

// $sql = "DELETE FROM `trip` WHERE `id` = 4";
$sql = "DELETE FROM `trip` WHERE `Destination` = 'Russia'"; // for deleting multiple rows
// $sql = "DELETE FROM `trip` WHERE `Destination` = 'Russia' LIMIT 3"; // for deleting multiple rows with limit
$result = mysqli_query($conn, $sql);

// how many rows affected

$aff = mysqli_affected_rows($conn);
echo "Number of rows affected: $aff <br>";

if($result)
{
    echo "The record deleted successfully! <br>";
}
else
{
    echo "The record can not be deleted! ";
}

















?>