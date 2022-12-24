<!DOCTYPE html>
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
    <title>Document</title>
    
    
</head>
<body>
<?php include 'partials/_dbconnect.php'; ?>
<div class="container my-4">
<div class="row my-4">
<h2 class="text-center my-3">Welcome to Panel Section Please Verify pending status</h2>
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

        echo '
        <form name="form1" action="status.php?catid='.$id.'" method="post">
        <div class="col-md-4 my-4">
<div class="card" style="width: 8rem height=:5rem;">
<img src="img/WhatsApp Image 2022-11-27 at 20.44.38 (4).jpeg"height="100" width="250"' . $cat . '" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title"><a href="pending_list.php?catid=' . $id . '">' . $cat . '</a></h5>
    <p class="card-text">' . substr($desc, 0, 50) . '......</p>

   <input type="submit" name="submit1" value="verified">
   <input type="submit" name="submit2" value="unverified">
   <input type="submit" name="submit3" value="post">
                                                     
    <div class="liquid"></div>
</a>
</div>
</div>
</div>
</form>';}}
?>
</div>
</div>

</body>
</html>