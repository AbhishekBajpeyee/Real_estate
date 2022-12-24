<?php
include 'partials/_dbconnect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="user_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>


    <?php
    $sno = $_GET['catid'];
    $sql = "SELECT * FROM `panel` WHERE category_id=$sno";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $catname = $row['category_name'];
    $catdesc = $row['category_discription'];
    if (isset($_POST["submit1"]) == true) {
        $v = "Verified";
        $sql = "INSERT INTO `varified` (`category_name`, `category_discription`, `created`) VALUES ('$catname', '$catdesc', current_timestamp())";
        $result = mysqli_query($conn, $sql);





       



    } 
    
    
    elseif (isset($_POST["submit2"]) == true) {
        $v = "Unverified";
        $sql = "SELECT * FROM `panel` WHERE category_id=$sno";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $catname = $row['category_name'];
        $catdesc = $row['category_discription'];
        $sql = "INSERT INTO `unvarified` (`category_name`, `category_discription`, `created`) VALUES ('$catname', '$catdesc', current_timestamp())";
        $result = mysqli_query($conn, $sql);







        
        
    } 
    
    elseif (isset($_POST["submit3"]) == true) {


        $sno = $_GET['catid'];
        $sql = "SELECT * FROM `panel` WHERE category_id=$sno";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $catname = $row['category_name'];
        $catdesc = $row['category_discription'];

        $sql = "INSERT INTO `categories` (`category_name`, `category_discription`, `created`) VALUES ('$catname', '$catdesc', current_timestamp())";
        $result = mysqli_query($conn, $sql);
    }
    
    
    
    else {


// ---------------------------varified content------------------------------------------------
$sql = "SELECT * FROM `varified`";
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
    <span class"text-dark" >Verified</span>
    <div class="liquid"></div>
</a>
</div>
</div>
</div>';

    }}



// ---------------------------------unverified content---------------------------------------------------



$sql = "SELECT * FROM `unvarified`";
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
            <div class="liquid">Unverified</div>
        </a>
        </div>
    </div>
</div>';}}























    //     $product_id = $_GET['catid'];
    //     $sql = "SELECT * FROM `panel` WHERE category_id=$product_id";
    //     $result = mysqli_query($conn, $sql);
    //     $row = mysqli_fetch_assoc($result);
    //     $catname = $row['category_name'];
    //     $catdesc = $row['category_discription'];
    //     echo '<div class="col-md-4 my-4">
    //     <div class="card" style="width: 2rem height=:1rem;">
    //      <img src="img/WhatsApp Image 2022-11-27 at 20.44.38 (4).jpeg"height="200" width="250"' . $catname . ' coding ,python" class="card-img-top" alt="...">
    //      <div class="card-body">
    //      <h5 class="card-title"><a href="status.php?catid=' . $product_id . '">' . $catname . '</a></h5>
    //          <p class="card-text">' . substr($catdesc, 0, 50) . '......</p>
    //          <a class="p" href="status.php?catid=' . $product_id . '">
    //          <span class"text-dark" >' . $v . '</span>
    //          <div class="liquid"></div>
    //      </a>
    //      </div>
    //     </div>
    //     </div>';
    }


    exit();
    ?>




    </div>
    </div>
    </div>











    <!-- <div class="row">


 $sql = "SELECT * FROM `panel`";
 $result = mysqli_query($conn, $sql);
 if(mysqli_num_rows( $result)>0){
     while ($row = mysqli_fetch_assoc($result)) {
         // echo $row['category_id'];
         // echo $row['category_name'];
         $cat = $row['category_name'];
         $desc = $row['Category_discription'];
         $id = $row['category_id'];
         echo '<div class="col-md-4 my-4">
<div class="card" style="width: 2rem height=:1rem;">
 <img src="img/WhatsApp Image 2022-11-27 at 20.44.38 (4).jpeg"height="200" width="250"' . $cat . ' coding ,python" class="card-img-top" alt="...">
 <div class="card-body">
 <h5 class="card-title"><a href="status.php?catid=' . $id . '" class=`verify${'.$id.'}`>' . $cat . '</a></h5>
     <p class="card-text">' . substr($desc, 0, 50) . '......</p>
     <a class="p" href="status.php?catid=' . $id . '">
     <span class"text-dark" >PENDING</span>
     <div class="liquid"></div>
 </a>
 </div>
</div>
</div>';}
 }
 else{
     echo "No brands found";
 }

 
 



</div>


   
   
</body>
</html>