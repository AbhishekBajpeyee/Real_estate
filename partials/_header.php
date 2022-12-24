<style>
    .navbar, .container-fluid{
        position: sticky;
        top: 0px;
        z-index: 2;
    }
    
    .nav-link {
        position: relative;
        display: inline-block;
        text-decoration: none;
        color: black;
    }

    .nav-link::before,
    .nav-link::after {
        content: '';
        position: absolute;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: greenyellow;
        transform: scaleX(0);
        transition: transform 0.5s;

    }

    .nav-link::before {
        bottom: 4px;
        transform-origin: right;
    }

    .nav-link::after {
        top: 4px;
        transform-origin: left;
    }

    .nav-link:hover::after,
    .nav-link:hover::before {
        transform: scaleX(1);
    }
    img{
        border-radius: 20px;
        margin-left: 2px;
    }

</style>
<a href="../services.php"></a>
<?php
   include 'partials/_dbconnect.php'?>
  <?php include 'conn.php' ?>

<?php
session_start();


echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/forum">Real Estate</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/forum">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="services.php">Services</a>
                </li>
                
                    
                    
                
                <li class="nav-item">
                    <a class="nav-link active" href="payment.php" tabindex="-1">Subscription
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contacts.php" tabindex="-1">Contact
                    </a>
                </li>
            </ul>
            <div class="row">';
            include '_dbconnect.php';
            include 'conn.php';
          
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



    echo '     <form class="d-flex" method="get" role="search" action="../search.php">
    <input class="form-control" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success ms-2" type="submit">Search</button>
                    
</form>';

echo '</div>
              <a href="./user_profile.php?userid='.$_SESSION['sno'].'"  <p  class="text-light my-0 mx-2"><img  src="'.$img.'" width="40" height="40" "></p></a>
                <a href="partials/_logout.php" class="btn btn-outline-success ml-2">Logout</a>
                
                   

</div>
              
</nav>';
} else {

    echo  ' <form class="d-flex" method="get" role="search" action="./search.php">
    <input class="form-control" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success ms-2" type="submit">Search</button>
                    
</form>
                    </div>
                    <button class="btn btn-outline-success ms-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                    <button class="btn btn-outline-success mx-2"  data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>';
                  
}


echo '</nav>';


include 'partials/_loginModal.php';
include 'partials/_signupModal.php';
if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert" mt-3>
    <strong>Successfully! </strong> Your account is created now you can login.......
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if (isset($_GET['login']) && $_GET['login'] == "false") {
    echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert" mt-3>
    <strong>Try Again!    </strong>  Email or Username is invalid.......
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}


?>