<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to iDiscuss - Coding Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?PHP

    include 'partials/_dbconnect.php';
    include 'partials/_header.php';

    ?>
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider1_img.jpg" class="d-block w-100" alt="..." height="800px">
            </div>
            <div class="carousel-item">
                <img src="img/slider2_img.jpg" class="d-block w-100" alt="..." height="800px">
            </div>
            <div class="carousel-item">
                <img src="img/slider3_img.jpg" class="d-block w-100" alt="..." height="800px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container p-3">
        <h1 class="text-center my-5">Welcome to iDiscuss - Categories</h1>
        <div class="row">
            <?PHP
            // Fetch all the categories & Use a for loop through iterate categories

            $sql = "SELECT * FROM `categories`";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result))
            {
                $cat_id=$row['category_id'];
                $cat=$row['category_name'];
                $cat_img=$row['img'];
                $cat_desc=$row['category_description'];
                echo ('
                <div class="col-lg-4 col-md-6 my-2">
                    <div class="card h-100 shadow">
                        <img src="'.$cat_img.'" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-decoration-none" href="threadslist.php?cat_id='.$cat_id.'">'.$cat.'</a></h5>
                            <p class="card-text">'.substr($cat_desc, 0, 120).'...</p>
                        </div>
                        <div class="p-3">
                        <a href="threadslist.php?cat_id='.$cat_id.'" class="btn btn-primary float-right">View Threads</a>
                      </div>
                    </div>
                </div>
                        ');
            }

            

            ?>

        </div>

    </div>

    <?PHP

    include 'partials/_footer.php';

    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>