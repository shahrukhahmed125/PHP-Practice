<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to iDiscuss - Coding Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style>
.Questions{
    min-height: 338px;
}
</style>
<body>
    <?PHP

    include 'partials/_dbconnect.php';
    include 'partials/_header.php';

    ?>
    <?PHP
        
    $id=$_GET['threadid'];
    $sql = "SELECT * FROM `threads` WHERE `thread_id` = $id";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result))
    {
        $title=$row['thread_title'];
        $desc=$row['thread_desc'];
        $thread_user_id = $row['thread_user_id'];
        $sql2 = "SELECT `user_email` FROM `users` WHERE `sno` = $thread_user_id";
        $result2 = mysqli_query($conn, $sql2); 
        $row2 = mysqli_fetch_assoc($result2);
        $user = $row2['user_email'];
    }
    ?>
    <div class="container p-3 my-4">
        <div class="row align-items-md-stretch">
            <div class="jumbotron h-100 p-5 bg-body-secondary border rounded-3">
                <h1 class="display-4"><?PHP echo $title;?></h1>
                <p class="lead"><?PHP echo $desc;?></p>
                <hr class="my-4">
                <p>This is a peer to peer forum. No Spam / Advertising / Self-promote in the forums is not allowed. Do not post copyright-infringing material. Do not post "offensive" posts, links or images. ... Do not PM users asking for help. ... Remain respectful of other members at all times.</p>
                <p>Posted By: <em><?PHP echo $user;?></em></p>
            </div>

        </div>
    </div>

    <?PHP
    $method = $_SERVER['REQUEST_METHOD'];
    $showAlert = false;

    if($method == 'POST')
    {
        // insert a comment
        $comment = $_POST['comment'];
        $comment = str_replace("<", "&lt", $comment); // replacing the string for the easy use without XSS errors 
        $comment = str_replace(">", "&gt", $comment); // str_replace('[search]', '[replace]', '[subject]');
        $comment = str_replace("'", "\'", $comment);
        $sno = $_POST['sno'];
        $sql = "INSERT INTO `comments`(`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment','$id','$sno',current_timestamp())";
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
                            <p>Your comment is added successfully.</p>
                        </div>
                    </div>
            </div>';
        }
    }
    ?>

    <?PHP
    if(isset($_SESSION['loggedin']) && $_SESSION['useremail'] == true)
    {
       echo' 
        <div class="container my-4">
            <h1>
                Post a Comment
            </h1>
            <form action="'.$_SERVER["REQUEST_URI"].'" method="post">
            <input type="hidden" name="sno" value="'. $_SESSION["sno"]. '">
                <div class="mb-3">
                    <label for="comment" class="form-label">Type your comment here</label>
                    <textarea class="form-control" id="comment" rows="4" name="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Post Comment</button>
            </form>
        </div>';
    }
    else{
        echo'
            <div class="container my-4">
                <h1>
                    Post a Comment
                </h1>
                <form action="'.$_SERVER["REQUEST_URI"].'" method="post">
                    <div id="titleHelp" class="form-text text-danger">* To post a comment please login to your account.</div>
                    <div class="mb-3">
                        <label for="comment" class="form-label">Type your comment here</label>
                        <textarea class="form-control" id="comment" rows="4" name="comment" Disabled></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" Disabled>Post Comment</button>
                </form>
            </div>';
        }        
    ?>
    <div class="container Questions">
        <h1>
            Discussions
        </h1>
        <?PHP
            $id=$_GET['threadid'];
            $sql = "SELECT * FROM `comments` WHERE `thread_id` = $id";
            $result = mysqli_query($conn,$sql);
            $noResult = true;
            while($row = mysqli_fetch_assoc($result))
            {   $noResult = false;
                $id = $row['comment_id'];
                $content=$row['comment_content'];
                $comment_time=$row['comment_time'];
                $comment_by=$row['comment_by'];
                $sql2 = "SELECT `user_email` FROM `users` WHERE `sno` = $comment_by";
                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $commenter = $row2['user_email'];

                echo'
                <div class="d-flex my-4">
                    <div class="flex-shrink-0">
                        <img src="img/userdefault_img.png" height="54px" width="64px" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                    <p class="fw-bold my-0">'.$commenter.' at '.$comment_time.'</p>
                        '.$content.'
                    </div>
                </div>';
            }

            // echo var_dump($noResult);
            if ($noResult) {
                echo '    
                    <div class="container p-3 my-4">
                        <div class="row align-items-md-stretch">
                            <div class="jumbotron h-100 p-5 bg-body-secondary border rounded-3">
                                <p class="display-4">No Comments Found!</p>
                                <p class="lead">Be the first person to comment.</p>
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