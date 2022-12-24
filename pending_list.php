<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include 'partials/_dbconnect.php'; ?>
<?php
    // $catid=$row['category_id']; 
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `panel` WHERE category_id=$id";

    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row['category_name'];
        $catdesc = $row['category_discription'];


        echo'<div class="container ">
        <div class="p-5 mb-4 rounded-3">
            <div class="para-fluid py-5">
                <h4 class="display-5 fw-bold">Welcome to <?php echo $catname; ?> forum...</h4>
                <p class="col-md-8 fs-4"><?php echo $catdesc; ?></p>
                <hr class="my-4">
                <p>This peer to peer forum is for sharing knowledge with each....."No Spam / Advertising / Self-promote in the forums is not allowed
                    These forums define spam as unsolicited advertisement for goods, services an…
                    Providing or asking for information on how to illegally obtain copyright…"</other>
                </p>
                </div>
    </div>
    </div>';
    }
?>

 
</body>
</html>