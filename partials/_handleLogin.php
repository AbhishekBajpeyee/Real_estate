
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <style>
	  @import "http://fonts.googleapis.com/css?family=Roboto:300,400,500,700";
      body{
        background-color: #FCFFCC;
 
      }
      .alert{
        display: flex;
        align-items: center;
       min-height: 100vh;
        justify-content: center;
      }
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
</head>
<body>
<?php
   include '_dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=$_POST['loginEmail'];
    $pass=$_POST['loginPass'];


    $sql="Select * from users where user_email='$email'";
    $result=mysqli_query($conn,$sql);
    $numRows=mysqli_num_rows($result);
  
    if($numRows==1){
        $row=mysqli_fetch_assoc($result);
        if(password_verify($pass,$row['user_pass'])){
            if($row["usertype"]=="user"){

                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['sno']=$row['sno'];
                $_SESSION['useremail']= $email;

                echo " loggedin" .$email;

                header("location:../index.php");
               
                
            }
            elseif($row["usertype"]=="admin"){
                session_start();
$_SESSION['loggedin']=true;
$_SESSION['sno']=$row['sno'];
$_SESSION['useremail']= $email;
echo " loggedin" .$email;
                  header("location:../admin_index.php");
              
              }
            elseif($row["usertype"]=="panel"){
                session_start();
$_SESSION['loggedin']=true;
$_SESSION['sno']=$row['sno'];
$_SESSION['useremail']= $email;
echo " loggedin" .$email;
                  header("location:../panel.php");
              
              }

}

else{
    echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert" mt-3>
          <strong>Incorrect password please reverify!</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
  }



    }

}


?>
</body>


</html>