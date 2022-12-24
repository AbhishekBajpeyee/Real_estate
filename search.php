<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta category_name="viewport" content="width=device-width, initial-scale=1">
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
        
        .col-md-3 {
            margin-left: -12px;
        }
        /* .carousel-item{
        width: 100%;
        height: 50%;
    } */
    </style>
    <link rel="stylesheet" href="css/_btn_style.css">

</head>

<body>

    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>


<!-- <search result py-3!--  -->
<div class="container my-3">
<h1>Search result for:<em> "<?php echo $_GET['search']?>"</h1></em>

<?php                   
$noresults=true;
$query=$_GET["search"];
$sql = "select * from threads where match(thread_title,thread_desc) against('$query')";

$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['thread_title'];
    $desc = $row['thread_desc'];
    $thread_id=$row['thread_id'];
   $url="thread.php?threadid=".$thread_id;
   $noresults=false;
    // display the search result
    echo '  <div class="result py-3">
    <h3> <a href="'.$url.'" class="text-dark">'.$title.'</a> </h3>
    <p>'.$desc.' </p>


</div>';
}
if($noresults){
    echo'<div class="alert alert-success" role="alert">
    <p class="display-6">No Results Found...</p>
    
    <hr>
    <p class="lead mb-0">Suggestions: <ul>
    <li>MAke sure that all words are spelled correctly</li>
    <li>Try different keywords</li>
    <li>Try more general keywords</li>
    
    
    </p>
  </div>';
}

?>






</div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>