<?php
// ---uasge of where cluase to fetch data from the database---

// connecting to the server and database

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_sra";

// creating a connection

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
    die("Sorry you failed to connect ".mysqli_connect_error());
}
else
{
    echo "Connection Was Successfull! <br>";
}

$sql = "SELECT * FROM `trip` WHERE `Destination`='Karachi'";
$result = mysqli_query($conn,$sql);

// find the number of rows in the table

$num = mysqli_num_rows($result);
echo "$num records found in the database <br>";

// print all the records through while loop

if($num > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['id']." Hello ".$row['Name']." Welcome to ".$row['Destination'];
        echo "<br>";
    }
}

// ---- Uasge of where cluase in updating the record ----

$sql = "UPDATE `trip` SET `Name` = 'Shahzaib Ali3' WHERE `id` = 3";
$result = mysqli_query($conn,$sql);

if($result)
{
    echo " Record was updated successfully! <br>";
}
else
{
    echo " Record was not updated successfully! <br>";
}







?>