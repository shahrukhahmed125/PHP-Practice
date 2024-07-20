<?PHP

session_start();
session_unset();
session_destroy();

// header("Location: /php_intro/login/input.php");

echo "You are logged out. Please login to continue ";
?>