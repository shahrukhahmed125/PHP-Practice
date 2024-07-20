<?PHP

// What is a session?
// A session is a way to store information (in variables) to be used across multiple pages.
// Unlike a cookie, the information is not stored on the users computer.


// Verify the user login info
session_start();

$_SESSION['username'] = "shahrukh";
$_SESSION['favCat'] = "Books";

echo "We have saved your session";


?>