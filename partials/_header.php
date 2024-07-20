<?PHP
include 'partials/_dbconnect.php';
$sql = "SELECT category_id, category_name FROM `categories` LIMIT 5";
$result = mysqli_query($conn,$sql);

session_start();
echo'

<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
<div class="container-fluid">
    <a class="navbar-brand" href="/forum">iDiscuss</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/forum">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/forum/about.php">About</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Top Categories
        </a>
        <ul class="dropdown-menu">';
        while($row = mysqli_fetch_assoc($result))
            {   $cat_id=$row['category_id'];
                $cat=$row['category_name'];
            
                echo'
                    <li><a class="dropdown-item" href="threadslist.php?cat_id='.$cat_id.'">'.$cat.'</a></li>';
            }
        echo'
        </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/forum/contact.php">Contact</a>
        </li>
    </ul>
    <div class="d-flex mx-2">';
        if(isset($_SESSION['loggedin']) && $_SESSION['useremail'] == true)
        {
        echo '
        <form class="d-flex mx-2" role="search" method="get" action="search.php">
            <input class="form-control me-2" name="search_query" type="search" action="search.php" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
            <p class="text-white my-0 mx-2">Welcome '.$_SESSION['useremail'].'</p>
        </form>
        <a href="partials/_logout.php" class="btn btn-outline-success mx-2">Logout</a>
        ';}
        else
        {
            echo'
            <form class="d-flex mx-2" role="search" method="get" action="search.php">
                <input class="form-control me-2" name="search_query" type="search" action="search.php" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
            <button class="btn btn-outline-success ml-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            <button class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#signupModal">SignUp</button>';
        }
        echo'    
    </div>
    </div>
</div>
</nav>

';

include 'partials/_loginModal.php';
include 'partials/_signupModal.php';

if(isset($_GET['loginsucess']) && $_GET['loginsucess'] == 'true')
{
    echo '<div class="toast-container position-fixed top-2 end-0 p-3">
    <div class="toast bg-success text-white show">
        <div class="toast-header text-white bg-success">
            <i class="bi bi-check"></i>
            <strong class="me-auto">Success</strong>
            <button type="button" class="btn-close text-white" data-bs-dismiss="toast"></button>
        </div>
        <div class="toast-body">
            <p>Your account is logged in successfully.</p>
        </div>
    </div>
</div>';

    
}
if(isset($_GET['loginsucess']) && $_GET['loginsucess'] == 'false')
{
    echo '<div class="toast-container position-fixed top-2 end-0 p-3">
    <div class="toast bg-danger text-white show">
        <div class="toast-header text-white bg-danger">
            <i class="bi bi-check"></i>
            <strong class="me-auto">Error</strong>
            <button type="button" class="btn-close text-white" data-bs-dismiss="toast"></button>
        </div>
        <div class="toast-body">
            <p>Please enter a valid useremail and password.</p>
        </div>
    </div>
</div>';
}
if(isset($_GET['signupsucess']) && $_GET['signupsucess'] == 'ture')
{
    echo '<div class="toast-container position-fixed top-2 end-0 p-3">
    <div class="toast bg-success text-white show">
        <div class="toast-header text-white bg-success">
            <i class="bi bi-check"></i>
            <strong class="me-auto">Success</strong>
            <button type="button" class="btn-close text-white" data-bs-dismiss="toast"></button>
        </div>
        <div class="toast-body">
            <p>Your account is created successfully.</p>
        </div>
    </div>
</div>';
}
if(isset($_GET['signupsucess']) && $_GET['signupsucess'] == 'false')
{
    echo '<div class="toast-container position-fixed top-2 end-0 p-3">
    <div class="toast bg-danger text-white show">
        <div class="toast-header text-white bg-danger">
            <i class="bi bi-check"></i>
            <strong class="me-auto">Error</strong>
            <button type="button" class="btn-close text-white" data-bs-dismiss="toast"></button>
        </div>
        <div class="toast-body">
            <p>Please enter a valid useremail and password.</p>
        </div>
    </div>
</div>';
}

?>

