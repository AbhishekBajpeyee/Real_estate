<style>
    .card-body-lg{
     background-color: #FCFFCC; 
    }
    /* .col-md-3{
        margin-left: -200px;
    } */
</style>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>iDiscuss...Coding_Forum!</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="._post.php/_btn_style.css">
    <link rel="stylesheet" href="_btn_style.css">
    
    <style>
        body {
            background-color: #FCFFCC;
        }

        .container h2 {
            color: #27A82F;
        }

       
    </style>
</head>

<body>

    <?php include '_admin_header.php'; ?>
    <?php include '_dbconnect.php'; ?>

    <!-- slider starts here -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="2 copy.jpeg" height="600" width="800" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="WhatsApp Image 2022-11-27 at 20.44.38 (1).jpeg" height="600" width="800" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="WhatsApp Image 2022-11-27 at 20.44.38 (2).jpeg" height="600" width="800" class="d-block w-100" alt="...">
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
    
    
    <div class="card">
  <div class="card-body-lg">
      <!-- <form action="/forum/partials/_post.php" method="post">
              <div class="">
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Category</label>
                          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                          
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">About</label>
                          <input type="text" class="form-control" id="about" name="about">
                      </div>
                      
                      <button type="submit" class="btn btn-primary btn-lg text-light btn btn-outline-success">Post</button>
                      
                      <!-- <a class="p" href="#">
        <button type ="submit" class"btn">    Post_Feed</button>
        <div class="liquid"></div>
    </a> -->
                  </div>
                 
              </form>

  </div>
</div>
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
            <img src="WhatsApp Image 2022-11-27 at 20.44.38 (4).jpeg"'. $cat . ' coding ,python" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><a href="../threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                <p class="card-text">' . substr($desc, 0, 50) . '......</p>
                <a class="p" href="../threadlist.php?catid=' . $id . '">
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
            <img src="WhatsApp Image 2022-11-27 at 20.44.38 (4).jpeg"' . $cat . ' coding ,python" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><a href="../threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                <p class="card-text">' . substr($desc, 0, 50) . '......</p>
                <a class="p" href="../threadlist.php?catid=' . $id . '">
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
            
            


            ?>
        
            <!-- use a for loop  to itrate  through categeories-->



        </div>
    </div>
    <?php include '_footer.php'; ?>


</body>


</html>

<!-- -------------------------------------------------------------------------------------------------------------- -->


<?php
   include '_dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $name= $_POST['name'];
    $about= $_POST['about'];

    // Check whether this email exist in databse
    $existSql="SELECT * FROM `categories` WHERE category_name= '$name'";
    $result=mysqli_query($conn,$existSql);
    $numRows=mysqli_num_rows($result);
    if($numRows>0){
        $showError="Email already in use";


    }
    else{
        
$sql="INSERT INTO `categories` (`category_name`, `category_discription`, `created`) VALUES ('$name', '$about', current_timestamp())";
$result=mysqli_query($conn,$sql);
if($result){
    $showAlert=true;
    
    // header("Location:/forum/partials/_post.php?post=true");
    // exit();
}
        
       
    }
    // header("Location:/forum/partials/_post.php?post=false&error=$showError");

}

