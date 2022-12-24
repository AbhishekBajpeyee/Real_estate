<?php
include('db.php');
$res=mysqli_query($con,"select * from post");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <style>
	  @import "http://fonts.googleapis.com/css?family=Roboto:300,400,500,700";
	  </style>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>iDiscuss...Coding_Forum!</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="csslike.css">
    
    <script src="indexlike.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
	<script type="text/javascript" src="jquery-3.5.1.min.js"> </script>
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
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE category_id=$id";

    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row['category_name'];
        $catdesc = $row['category_discription'];
    }
?>
<?php
$method= $_SERVER['REQUEST_METHOD'];
$showAlert=false;
if($method=='POST'){

    // insert thread  into db 
    $th_title=$_POST['title'];

    $th_desc=$_POST['desc'];
    $th_title=str_replace("<","&lt;",$th_title);
    $th_title=str_replace(">","&gt;",$th_title); 
    $th_desc=str_replace("<","&lt;",$th_desc);
    $th_desc=str_replace(">","&gt;",$th_desc);
    $sno=$_POST['sno'];
    $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `timestamp`,`thread_user_id`) VALUES ('$th_title', '$th_desc', '$id', current_timestamp(),'$sno')";
    $result = mysqli_query($conn, $sql);
    $showAlert=true;
    if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert" mt-3>
        <strong>Thank You! </strong> Your thread has been added please wait for community to respond......
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    
    }
}

?>



    <!-- slider starts here -->

    <!-- categeory container starts here -->
    <div class="container ">
        <div class="p-5 mb-4 rounded-3">
            <div class="para-fluid py-5">
                <h4 class="display-5 fw-bold">Welcome to <?php echo $catname; ?> forum...</h4>
                <p class="col-md-8 fs-4"><?php echo $catdesc; ?></p>
                <hr class="my-4">
                <p>This peer to peer forum is for sharing knowledge with each....."No Spam / Advertising / Self-promote in the forums is not allowed
                    These forums define spam as unsolicited advertisement for goods, services an…
                    Providing or asking for information on how to illegally obtain copyright…"</other>
                </p>
                </div>
    </div>
    </div>
<!-- like system -->

<?php include 'like.php'; ?>


<!-- like system -->

<div class="container mt-0">
<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ 
    echo '<div class="container">
        <h1>Start a Discussion</h1>
        <form action="'. $_SERVER["REQUEST_URI"].'" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Problem Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
        <input type="hidden" name="sno" value="'.$_SESSION["sno"].'">
                
                <div id="titleHelp" class="form-text">Keep your title as short crisp and as possible</div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Ellaborate Your Concern</label>
                <textarea class="form-control" id="desc"  name= "desc" cols="30" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-success mt-3">Submit</button>
        </form>
    </div>';
}
    else{
echo'<div class="alert alert-danger" role="alert">
<p class="display-6">You are not Loggedin!</p>

<hr>
<p class="mb-0">Please Loggedin to start a discussion....</p>
</div>';
    }
    ?>
        <h1 class="py-3">Browse Questions</h1>
        <?php
        $id = $_GET['catid'];
        $sql = " SELECT * FROM `threads` WHERE thread_cat_id=$id";

        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;

            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
            $id = $row['thread_id'];
            $thread_time = $row['timestamp'];
            
            $thread_user_id=$row['thread_user_id'];
            $sql2 = " SELECT * FROM `users` WHERE sno=$thread_user_id";
            $result2 = mysqli_query($conn, $sql2);
            // $row2=mysqli_fetch_assoc($result2);
            while ($row2 = mysqli_fetch_assoc($result2)) {
              $sno=$row2['sno'];
              $img=$row2['image'];
                $username= $row2['username'];
                $useremail = $row2['user_email'];
            
          
        //   --------------------------------------------------------------------->
       

            
            echo ' <div class="media my-3">
<a href="user.php?userid=' .$row2['sno']. '">
<img src="'.$row2['image'].'" width="54" height="54" alt=""></a>
        <div class="media-body">'.
       

        '<h5 class="mt-0"><a class="text-dark" href="thread.php?threadid=' . $id . '">' . $title . '</a></h5>
        <p>' . $desc . '</p>
        </div>'.' <div class="font-weight-bold my-0" ><a class="text-dark" href="thread.php?threadid=' . $id . '">Asked by '.$row2['username'].'
        at '.$thread_time.'</div>'.
        '</div>';
            }
        }

        if ($noResult) {
            echo '<div class="alert alert-success" role="alert">
        <p class="display-6">No Threads Found...</p>
        
        <hr>
        <p class="mb-0">Be the first person to ask a question....</p>
      </div>';
        }
  
        ?>
        
    </div>
    </div>


    <!--"' use a for loop  to itrate  through categeories'"-->




    <?php include 'partials/_footer.php'; ?>


</body>


</html>