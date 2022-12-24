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
    <link rel="stylesheet" href="css/_btn_style.css">
</head>

<body>
<?php include 'partials/_header.php'; ?>

    <?php include 'partials/_dbconnect.php'; ?> 
<?php


include 'config.php';

  $user=$_GET['userid'];
  $sql = "SELECT * FROM `users` WHERE sno=$user";

  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $snow=$row['sno'];
    $img=$row['image'];
      $username= $row['username'];
      $useremail = $row['user_email'];
      $gender=$row['gender'];
      $contact=$row['contact'];
      $dob=$row['dob'];
      $age=$row['age'];
  }
  echo'<div class="card">
  
  <div class="imgBx">
  <a href="edit.php?userid='.$user.'"><img src="'.$img.'" width="300" height="300" alt="">
      </div>
  
  <div class="content">
      <div class="h3">
      <h3> '.$username .'<br><span>'.$useremail.' </span><br><span>Age-30</span><br>

      <span> <em><b>Gender:</b></em>'.$gender.'</span><br>
      <span> <em><b>Address:</b></em> '.$age.'</span><br>
      <span> <em><b>DOB:</b></em>'.$dob.'</span><br>
      <span> <em><b>Contact No:</b></em>'.$contact.'</span><br>
      </h3></a>
          <ul class="sci">
          <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
          <li><a href="https://instagram.com/soljar_patel_57?igshid=YzdkMWQ2MWU="><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
          </ul>
  </div>
  </div>
  </div>
  ';
    ?>
 <?php

                    
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    

    // $email=$_POST['loginEmail'];
    // $pass=$_POST['loginPass'];
    // $_SESSION['loggedin']=true;
    // $_SESSION['sno']=$row['sno'];
    $email=$_SESSION['useremail'];

    $sql="Select * from users where user_email='$email'";
    $result=mysqli_query($conn,$sql);
    $numRows=mysqli_num_rows($result);

    $row=mysqli_fetch_assoc($result);
    $img=$row['image'];
                    echo'<div class="card">
                    <div class="card-body-lg">
                        <form action="profile.php?userid='.$_SESSION['sno'].'" method="post">
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
  </div> ';

            }
            
    ?>







<?php
   include 'partials/_dbconnect.php';
$sno=$_GET['userid'];
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
        
$sql="INSERT INTO `panel` (`category_name`, `category_discription`, `created`) VALUES ('$name', '$about', current_timestamp())";
$result=mysqli_query($conn,$sql);
if($result){
    $showAlert=true;
    
    // header("Location:/forum/partials/_post.php?post=true");
    // exit();
}
        
       
    }
    // header("Location:/forum/partials/_post.php?post=false&error=$showError");

}

?>

       

























        <div class="row">
            <!-- fetch all the categeory -->
            <?php
            
            $sql = "SELECT * FROM `panel`";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows( $result)>0){
                while ($row = mysqli_fetch_assoc($result)) {
                    // echo $row['category_id'];
                    // echo $row['category_name'];
                    $cat = $row['category_name'];
                    $desc = $row['category_discription'];
                    $id = $row['category_id'];
                    echo '<div class="col-md-4 my-4">
        <div class="card" style="width: 8rem height=:5rem;">
            <img src="img/WhatsApp Image 2022-11-27 at 20.44.38 (4).jpeg"' . $cat . ' coding ,python" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><a href="status.php?catid=' . $id . '">' . $cat . '</a></h5>
                <p class="card-text">' . substr($desc, 0, 50) . '......</p>
                <a class="p" href="status.php?catid=' . $id . '">
                <span class"text-dark" >Check_Status</span>
                <div class="liquid"></div>
            </a>
            </div>
        </div>
    </div>';
}
            }
           

?>





<?php include 'partials/_footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>