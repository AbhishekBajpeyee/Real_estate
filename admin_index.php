<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta category_name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>iDiscuss...Coding_Forum!</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="csslike.css">
    <script src="indexlike.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
    <style>
    
       
       body{
        background: #FCFFCC;
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
<?php include 'partials/_admin_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>

    <!-- slider starts here -->
  

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/2.jpeg" height="600" width="900" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/WhatsApp Image 2022-11-27 at 20.44.38 (1).jpeg" height="600" width="900" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/WhatsApp Image 2022-11-27 at 20.44.38 (2).jpeg" height="600" width="900" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- categeory container starts here -->
   
    <div class="container my-4">
        <h2 class="text-center my-3">Welcome to the safest Real Estate site....!</h2>



        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <form action="" method="GET">

                        <div class="card shadow mt-3">
                            <div class="card-header">
                                <h5>Filter
                                    <button type="submit" class="btn btn-primary btn-sm float-end">
                                        Search
                                    </button>

                                </h5>

                            </div>
                            <div class="card-body">
                                <h6>Brand List</h6>
                                <hr>
                                <?php
                                $conn = mysqli_connect("localhost", "root", "", "idiscuss");
                                $brand_query = "SELECT * FROM `a_brands`";
                                $brand_query_run = mysqli_query($conn, $brand_query);

                                if (mysqli_num_rows($brand_query_run) > 0) {

                                    foreach ($brand_query_run as $brandlist) {
                                        $checked =[];
                                        if(isset($_GET['brands'])){
                                            $checked=$_GET['brands'];
                                        }
                                ?>
                                    <div>
                                        <input type="checkbox" name="brands[]" value="<?= $brandlist['id'] ?>" <?php if(in_array($brandlist[ 'id'],$checked)){ echo "checked";}?> />
                                        <?= $brandlist['name'];     ?>
                                    </div>
                                    <?php
                                    }
                                } else {
                                    echo "No brands found";
                                }
                                ?>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- brand items -->

            </div>
        </div>
        <form class="d-flex my-3" method="get" role="search" action="mainsearch.php">
    <input class="form-control" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success ms-2" type="submit">Search</button>
                    
</form>
























        <div class="row">
            <!-- fetch all the categeory -->
            <?php
if(isset($_GET['brands'])){
$brandchecked=[];
$brandchecked=$_GET['brands'];
foreach($brandchecked as $rowbrand){
    $sql = "SELECT * FROM `categories` Where brand_id IN ($rowbrand)";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows( $result)>0){
                while ($row = mysqli_fetch_assoc($result)) {
                    // echo $row['category_id'];
                    // echo $row['category_name'];
                    $cat = $row['category_name'];
                    $desc = $row['category_discription'];
                    $id = $row['category_id'];
                    echo '<div class="col-md-4 my-4">
        <div class="card" style="width: 18rem;">
            <img src="img/WhatsApp Image 2022-11-27 at 20.44.38 (4).jpeg"' . $cat . ' coding ,python" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><a href="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                <p class="card-text">' . substr($desc, 0, 50) . '......</p>

               


                <a class="p" href="threadlist.php?catid=' . $id . '">
        <span class"text-dark">View Threads</span>
        <div class="liquid"></div>
    </a>
            </div>
        </div>
    </div>';}
            }
            else{
                echo "No brands found";
            }
}

}
else{



            $sql = "SELECT * FROM `categories`";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows( $result)>0){
                while ($row = mysqli_fetch_assoc($result)) {
                    // echo $row['category_id'];
                    // echo $row['category_name'];
                    $cat = $row['category_name'];
                    $desc = $row['category_discription'];
                    $id = $row['category_id'];
                    echo '<div class="col-md-4 my-4">
        <div class="card" style="width: 18rem;">
            <img src="img/WhatsApp Image 2022-11-27 at 20.44.38 (4).jpeg"' . $cat . ' coding ,python" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><a href="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                <p class="card-text">' . substr($desc, 0, 50) . '......</p>
                <a class="p" href="threadlist.php?catid=' . $id . '">
                <span class"text-dark" >View Threads</span>
                <div class="liquid"></div>
            </a>
            </div>
        </div>
    </div>';}
            }
            else{
                echo "No brands found";
            }
        }
            
            


            ?>

                <!-- use a for loop  to itrate  through categeories-->



        </div>
    </div>
    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="/forum">Previous</a></li>
    <li class="page-item"><a class="page-link" href="/forum">1</a></li>
    <li class="page-item"><a class="page-link" href="/forum">2</a></li>
    <li class="page-item"><a class="page-link" href="/forum">3</a></li>
    <li class="page-item"><a class="page-link" href="/forum">Next</a></li>
  </ul>
</nav>
    <?php include 'partials/_footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


    <!-- <link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
	rel="stylesheet">
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
</body>


</html>