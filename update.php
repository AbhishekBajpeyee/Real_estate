<?php

include 'config.php';
$userid=$_GET['userid'];
$sql="SELECT * FROM `users` WHERE `sno`='$userid'";
$result=mysqli_query($conn, $sql);
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

    $sql="UPDATE `users` SET `age` = '$age', `username`='$username',`gender` = '$gender', `contact` = '$contact', `dob` = '$dob', `image` = '$img_des' WHERE `users`.`sno` = '$userid'";
$result= mysqli_query($conn, $sql);
if($result){
    echo "successfully insert";
}

}







?>