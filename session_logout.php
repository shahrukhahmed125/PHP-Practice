<?PHP

session_start();
session_unset();
session_destroy();

echo "You are logged out";

?>