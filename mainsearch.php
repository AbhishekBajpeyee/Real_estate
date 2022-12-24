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
$sql = "select * from categories where match(category_name,category_discription) against('$query')";

$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['category_name'];
    $desc = $row['category_discription'];
    $category_id=$row['category_id'];
   $url="threadlist.php?threadid=".$category_id;
   $noresults=false;
    // display the search result
    echo ' 

    <div class="col-md-4 my-4">
        <div class="card" style="width: 18rem;">
            <img src="img/WhatsApp Image 2022-11-27 at 20.44.38 (4).jpeg"' . $title . ' coding ,python" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><a href="'.$url.'">' . $title . '</a></h5>
                <p class="card-text">' . substr($desc, 0, 50) . '......</p>

               


                <a class="p" href="threadlist.php?catid=' . $category_id . '">
        <span class"text-dark">View Threads</span>
        <div class="liquid"></div>
    </a>
            </div>
        </div>
    </div>


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