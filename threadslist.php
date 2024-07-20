<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to iDiscuss - Coding Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style>
    .Questions {
        min-height: 338px;
    }
</style>

<body>
    <?PHP

    include 'partials/_dbconnect.php';
    include 'partials/_header.php';

    $cat_id = $_GET['cat_id'];
    $sql = "SELECT * FROM `categories` WHERE `category_id` = $cat_id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $cat = $row['category_name'];
        $cat_desc = $row['category_description'];
    }
    ?>



    <?PHP

    $method = $_SERVER['REQUEST_METHOD'];
    $showAlert = false;
    if ($method == 'POST') {
        // insert into thread
        $th_title = $_POST['title'];
        $th_title = str_replace("<", "&lt", $th_title); // replacing the string for the easy use without XSS errors 
        $th_title = str_replace(">", "&gt", $th_title); // str_replace('[search]', '[replace]', '[subject]');
        $th_title = str_replace("'", "\'", $th_title);
        $th_desc = $_POST['desc'];
        $th_desc = str_replace("<", "&lt", $th_desc);
        $th_desc = str_replace(">", "&gt", $th_desc);
        $th_desc = str_replace("'", "\'", $th_desc);
        $sno = $_POST['sno'];
        $sql = "INSERT INTO `threads`(`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title','$th_desc','$cat_id','$sno',current_timestamp())";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;

        if ($showAlert) {
            echo '
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div class="toast bg-success text-white show">
                        <div class="toast-header text-white bg-success">
                            <i class="bi bi-check"></i>
                            <strong class="me-auto">Success</strong>
                            <button type="button" class="btn-close text-white" data-bs-dismiss="toast"></button>
                        </div>
                        <div class="toast-body">
                            <p>Your question is added successfully.</p>
                        </div>
                    </div>
            </div>';
        }
    }

    ?>


    <div class="container p-3 my-4">
        <div class="row align-items-md-stretch">
            <div class="jumbotron h-100 p-5 bg-body-secondary border rounded-3">
                <h1 class="display-4">Welcome to <?PHP echo $cat; ?> forums</h1>
                <p class="lead"><?PHP echo $cat_desc; ?></p>
                <hr class="my-4">
                <p>This is a peer to peer forum. No Spam / Advertising / Self-promote in the forums is not allowed. Do not post copyright-infringing material. Do not post "offensive" posts, links or images. ... Do not PM users asking for help. ... Remain respectful of other members at all times.</p>
            </div>

        </div>
    </div>

    <?PHP

    if(isset($_SESSION['loggedin']) && $_SESSION['useremail'] == true)
    {
        echo'
        <div class="container">
        <h1>
            Start a Discussion
        </h1>
        <form action="'.$_SERVER["REQUEST_URI"].'" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Problem Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp">
                <div id="titleHelp" class="form-text">Keep your title as short and crisp as possible.</div>
            </div>
            <input type="hidden" name="sno" value="'. $_SESSION["sno"]. '">
            <div class="mb-3">
                <label for="desc" class="form-label">Elaborate Your Problem</label>
                <textarea class="form-control" id="desc" rows="4" name="desc"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>';
    }
    else{
        echo '
        <div class="container">
            <h1>
                Start a Discussion
            </h1>
            <form action="'.$_SERVER["REQUEST_URI"].'" method="post">
            <div id="titleHelp" class="form-text text-danger">* To start a discussion please login to your account.</div>
                <div class="mb-3">
                    <label for="title" class="form-label">Problem Title</label>
                    <input type="text" class="form-control"  Disabled id="title" name="title" aria-describedby="titleHelp">
                    <div id="titleHelp" class="form-text">Keep your title as short and crisp as possible.</div>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Elaborate Your Problem</label>
                    <textarea class="form-control"  Disabled id="desc" rows="4" name="desc"></textarea>
                </div>
                <button type="submit" class="btn btn-success" Disabled>Submit</button>
            </form>
        </div>';
    }
    ?>
    <div class="container my-4 Questions">
        <h1>
            Browse Questions
        </h1>
        <?PHP
        $cat_id = $_GET['cat_id'];
        $sql = "SELECT * FROM `threads` WHERE `thread_cat_id` = $cat_id";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $id = $row['thread_id'];
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
            $thred_time = $row['timestamp'];
            $thread_user_id = $row['thread_user_id'];
            $sql2 = "SELECT `user_email` FROM `users` WHERE `sno` = $thread_user_id";
            $result2 = mysqli_query($conn, $sql2); 
            $row2 = mysqli_fetch_assoc($result2);
            $user = $row2['user_email'];

            echo '
                <div class="d-flex my-4">
                    <div class="flex-shrink-0">
                        <img src="img/userdefault_img.png" height="54px" width="64px" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="fw-bold my-0">'.$user.' at '.$thred_time.'</p>
                        <h5 class="mt-0"><a class="text-decoration-none" href="thread.php?threadid=' . $id . '">' . $title . '</a></h5>
                        ' . $desc . '
                    </div>
                </div>';
        }
        // echo var_dump($noResult);
        if ($noResult) {
            echo '    
                <div class="container p-3 my-4">
                    <div class="row align-items-md-stretch">
                        <div class="jumbotron h-100 p-5 bg-body-secondary border rounded-3">
                            <p class="display-4">No Threads Found!</p>
                            <p class="lead">Be the first person to ask a question.</p>
                        </div>
            
                    </div>
                </div>';
        }
        ?>



    </div>

    <?PHP

    include 'partials/_footer.php';

    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script>
document.getElementById("toastbtn").onclick = function() {
  var toastElList = [].slice.call(document.querySelectorAll('.toast'))
  var toastList = toastElList.map(function(toastEl) {
    return new bootstrap.Toast(toastEl)
  })
  toastList.forEach(toast => toast.show().delay(5000).hide())
}
</script>
</html>