<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to iDiscuss - Coding Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style>
    .container {
        min-height: 100vh;
    }
</style>

<body>
    <?PHP

    include 'partials/_dbconnect.php';
    include 'partials/_header.php';

    ?>

    <!-- Search Results -->
    <div class="container my-3" id="maincontainer">
        <h1 class="py-3">Search results for <em>"<?php echo $_GET['search_query'] ?>"</em></h1>

        <?PHP
        //ALTER TABLE `threads` ADD FULLTEXT(`thread_title`,`thread_desc`); // query for adding fulltext to table for searching feature

        $noResult = true;
        $search = $_GET['search_query'];
        $sql = "SELECT * FROM `threads` WHERE MATCH(`thread_title`,`thread_desc`) against ('$search')"; // query for search results
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];

            $thread_id = $row['thread_id'];
            $url = "thread.php?threadid=$thread_id";
            $noResult = false;

            // Display the search results

            echo'
            <div class="result">
                <h3><a href="'.$url.'" class="text-dark">'.$title.'</a> </h3>
                <p>'.$desc.'</p>
            </div>';

        }
        
        if ($noResult) {
            echo '    
                <div class="container p-3 my-4">
                    <div class="row align-items-md-stretch">
                        <div class="jumbotron h-100 p-5 bg-body-secondary border rounded-3">
                            <p class="display-4">No Results Found!</p>
                            <p class="lead">Suggestions:
                                <li>Make sure that all words are spelled correctly.</li>
                                <li>Try different keywords.</li>
                                <li>Try more general keywords.</li>
                            </p>
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

</html>