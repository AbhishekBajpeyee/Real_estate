<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>iDiscuss...Coding_Forum!</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #FCFFCC;
        }

        .container h2 {
            color: #27A82F;
        }

        #carbonads {
            background-color: #FCFFCC;
        }
        .font-weight-bold{
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php
    // $catid=$row['category_id']; 
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `threads` WHERE thread_id=$id";

    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_user_id = $row['thread_user_id'];
        // query the users table to find out the name of the original poster
        $sql2="SELECT  `username` FROM `users` WHERE sno=' $thread_user_id'";
        $result2 = mysqli_query($conn, $sql2);
        $row2=mysqli_fetch_assoc($result2);
        $posted_by=$row2['username'];
    }



    ?>
    <?php
$method= $_SERVER['REQUEST_METHOD'];
$showAlert=false;
if($method=='POST'){

    // insert comment  into db 
    $comment=$_POST['comment'];
    $comment=str_replace("<","&lt;",$comment);
    $comment=str_replace(">","&gt;",$comment);


    $sno=$_POST['sno'];
    $sql = "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment', '$id', '$sno', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    $showAlert=true;
    if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert" mt-3>
        <strong>Thank You! </strong> Your comment has been added.....!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}

?>


    <!-- <?php
    $method = $_SERVER['REQUEST_METHOD'];
    $showAlert = false;
    if ($method == 'POST') {

        // insert thread  into db 
        $th_title = $_POST['title'];
        $th_desc = $_POST['desc'];
        $sno = $_POST['sno'];
        $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '$sno', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if ($showAlert) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert" mt-3>
        <strong>Thank You! </strong> Your thread has been added please wait for community to respond......
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        }
    }

    ?> -->

    
<!-- categeory container starts here -->
    <div class="container my-4">
        <div class="p-5 mb-4 rounded-3">
            <div class="container-fluid py-5">
                <h4 class="display-5 fw-bold"><?php echo $title; ?></h4>
                <p class="col-md-8 fs-4"><?php echo $desc; ?></p>
                <hr class="my-4">
                <p>This peer to peer forum is for sharing knowledge with each....."No Spam / Advertising / Self-promote in the forums is not allowed
                    These forums define spam as unsolicited advertisement for goods, services an…
                    Providing or asking for information on how to illegally obtain copyright…"</other>
                </p>
                
                <p>Posted by:<em><b><?php echo $posted_by ?></b></em></p>
            </div>
        </div>
    </div>
    <div class="container">
<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
    echo'<h1>Suggest Something</h1>
        <form action="'. $_SERVER['REQUEST_URI'].'" method="post">

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Type your comment</label>
                <textarea class="form-control" id="comment" name="comment" cols="30" rows="3"></textarea>
                <input type="hidden" name="sno" value="'.$_SESSION["sno"].'">
            </div>

            <button type="submit" class="btn btn-success mt-3">Post Comment</button>
        </form>

    </div>';
}
else{
    echo'<div class="alert alert-danger" role="alert">
    <p class="display-6">You are not Loggedin!</p>
    
    <hr>
    <p class="mb-0">Please Loggedin to Post Your Comment....</p>
    </div>';
    
    
        }

?>

    <div class="container">
        <h1 class="py-2">Discussion</h1>
        <?php
        $id = $_GET["threadid"];
        $sql = " SELECT * FROM `comments` WHERE thread_id=$id";

        $result = mysqli_query($conn, $sql);
        $noResult = true;

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row["comment_id"];
            $content = $row["comment_content"];
            $noResult = false;
            $comment_time=$row["comment_time"];
            $comment_by=$row['comment_by'];
            $sql2 = " SELECT * FROM `users` WHERE sno=$comment_by";
            $result2 = mysqli_query($conn, $sql2);
           while ($row2 = mysqli_fetch_assoc($result2)) {
              $sno=$row2['sno'];
              $img=$row2['image'];
                $username= $row2['username'];
                $useremail = $row2['user_email'];

            echo '<div class="media my-3">
<a href="user.php?userid=' . $row2['username'] . '">
<img src="'.$img.'" width="54px" class="align-self-start mr-3" alt="..."></a>
        <div class="media-body">
        <p class="font-weight-bold my-0">Commented by: '.$row2['username'].' user at '.$comment_time.'</p>

        ' . $content . '
        
        </div>
        </div>';
        }
    }

        if ($noResult) {
            echo '<div class="alert alert-success" role="alert">
    <p class="display-6">No Suggestions Found...</p>
    
    <hr>
    <p class="mb-0">Be the first person to answer this qustion....</p>
  </div>';
        }
        ?>

        <!-- <div class="media my-3">
            <img src="img/user-2.png" width="54px" class="align-self-start mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Unable to install Pyaudio error</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            </div>
        </div> -->

    </div>
    </div>


    <!--"' use a for loop  to itrate  through categeories'"-->




    <?php include 'partials/_footer.php'; ?>


</body>


</html>