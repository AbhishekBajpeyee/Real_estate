<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
  </head>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
body{
   background-image: url("bg2.jpg");
   background-repeat: no-repeat;
   background-size: 100% 130%;
   
}
.main {
   margin-top: 12%;
   display: flex;
   justify-content: center;
  zoom: 190%;
}
table{
   border: 6px black solid;
   border-radius: 10px;
   background-color: rgb(230, 219, 190);
   padding-left: 400px;
   padding-top: 25px;
   padding-bottom: 10px;
   opacity: .8;
}
#center{
   align-items: center;
}
input{
   border: none;
}

</style>
</head>
<body>
    
   
 
<?php

echo'<div class="main">
        <form action="edit.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label for="">Name:</label></td>
                    <td><input type="text" name="username" placeholder="Enter Your Name"></td>
                </tr>
                <tr>
                    <td> <label for="">Gender:</label></td>
                    <td> <input type="text" name="gender" id="" placeholder="Gender"></td>
                </tr>

                <tr>
                    <td> <label for="">Contact No:</label></td>
                    <td><input type="text" name="contact" id="" placeholder="Mobile Number"></td>
                </tr>
                <tr>
                    <td><label for="">Age:</label></td>
                    <td><input type="text" name="age" id=""placeholder="Enter Your Age"></td>
                </tr>
                <tr>
                    <td><label for="">DOB:</label></td>
                    <td><input type="text" name="dob" id="" placeholder="../../...."></td>
                </tr>
                <tr>
                    <td><label for="">Image</label></td>
                    <td ><input type="file" name="image" id=""></td>
                </tr>
                    <td></td>
                    <td ><button name="upload">Upload</button></td>
                </tr>

            </table>
        </form>
    </div>';





























include 'config.php';
include 'partials/_dbconnect.php';
session_start();
// $user=$_GET['userid'];

// $sql="SELECT * FROM `users` WHERE `sno`='$_SESSION[sno]'";
// $result=mysqli_query($conn, $sql);
if(isset($_POST['upload']))
{
    $username= $_POST['username'];
    $age= $_POST['age'];
    $contact= $_POST['contact'];
    $dob= $_POST['dob'];
    $gender= $_POST['gender'];
    $image= $_FILES['image'];
    // print_r($_FILES['image']);
    $img_loc=$_FILES['image']['tmp_name'];
    $img_name=$_FILES['image']['name'];
    $img_des="uploadImage/".$img_name;
    move_uploaded_file($img_loc,'uploadImage/'.$img_name);

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    $sql="UPDATE `users` SET `age` = '$age', `username`='$username',`gender` = '$gender', `contact` = '$contact', `dob` = '$dob', `image` = '$img_des' WHERE `users`.`sno` = '$_SESSION[sno]'";
$result= mysqli_query($conn, $sql);
if($result){
    echo "successfully insert";
}
    }
}




?>
  



<!-- </div> -->

</body>
</html>