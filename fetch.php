<?php

// connecting to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_sra";
 
// creating a connection

$conn = mysqli_connect($servername, $username, $password, $database);

// die function if not connected

if(!$conn)
{
    die("Sorry you failed to connect ".mysqli_connect_error());
}
else
{
    echo "Connection was Successfull! <br>";
}

$sql = "SELECT * FROM `trip`";
$result = mysqli_query($conn,$sql);

// find the number of rows in the table

$num = mysqli_num_rows($result);
echo  "$num records found in the database. <br>";

// print all record through while loop

if($num > 0)
{
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    while($row = mysqli_fetch_assoc($result))
    {
        // echo var_dump($row);
        echo $row['id']." Hello ".$row['Name']." welcome to ".$row['Destination'];
        echo "<br>";
    }
}


?>