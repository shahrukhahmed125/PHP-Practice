<?PHP
// Script to connect to the Database

$servername = "localhost";
$username = "root";
$password = "";
$database = "idiscuss";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn)
{
    die("Sorry you can not connect".mysqli_connect_error());
}



?>