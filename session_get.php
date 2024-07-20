<?PHP

// Start the session and get data

session_start();

if(isset($_SESSION['username']))
{
    echo "Welcome ".$_SESSION['username'];
    echo "<br> Your favorite category is ".$_SESSION['favCat'];
    
}
else
{
    echo "Please login to continue";
}


?>