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
<?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?> 
<?php
include 'config.php';
  $username=$_GET['userid'];
  $sql2 = " SELECT * FROM `users` WHERE sno=$username";
  $result2 = mysqli_query($conn, $sql2);
 while ($row2 = mysqli_fetch_assoc($result2)) {
    $sno=$row2['sno'];
    $img=$row2['image'];
      $username= $row2['username'];
      $useremail = $row2['user_email'];
      $gender=$row2['gender'];
      $contact=$row2['contact'];
      $dob=$row2['dob'];
      $age=$row2['age'];



      echo'<div class="card">
  
      <div class="imgBx">
          <img src="'.$img.'" width="300" height="300" alt="">
          </div>
      
      <div class="content">
          <div>
          
         <h3>'.$username.'<br><span><em><b>Idiscuss User</b></em></span><br>
         <span><em><b>'.$useremail.'</b></em></span><br>
          <span> <em><b>Gender:</b></em>'.$gender.'</span><br>
          <span> <em><b>Address:</b></em> '.$age.'</span><br>
          <span> <em><b>DOB:</b></em>'.$dob.'</span><br>
          <span> <em><b>Contact No:</b></em>'.$contact.'</span><br>
          </h3>
              <ul class="sci">
              <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
              </ul>
          </h3></a>
              
  </div>
      </div>
  </div>';}

    ?>
























<?php include 'partials/_footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>