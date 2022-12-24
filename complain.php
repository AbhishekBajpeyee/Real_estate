<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .row{
            display: flex;
            align-items: center;
            min-height: 1vh;
            justify-content: center;
        }
       .form-group{
        margin-top: 5px;
        display: flex;
        border-radius: 5px;
        
       } 
    </style>
</head>

<body>

    
        <h1 class="text-center">Please Register your Complaint!</h1>
       
        <center>
            <?php
            if (isset($_POST['sendmail'])) {
                if (mail($_POST['email'], $_POST['subject'], $_POST['messege'])) {
                    echo "<script>alert('Your complaint is now registered!')</script>";
                } else {
                    echo "failed";
                }
            }
            ?>
            <div class="row my-3">
                    <form role="form" method="post" enctype="multipart/form-data">

                
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">To Email:</label>
    <input type="email" class"form-control" id="email" name="email" maxlength="50" value="snehakumarihzb1@gmail.com">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Subject:</label>
    <input type="text" class"form-control" id="subject" name="subject" maxlength="50">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Elaborate:</label>
    <textarea name="messege" id="messege" maxlength="60000" placeholder="Type your message here"></textarea>
  </div>
  
  <button type="submit" name="sendmail" class="btn btn-lg btn-success btn-block">Send

                                </button>




<!-- 
                        <div class="row">
                            <div class="col-sm-9 form-group">
                                <label for="email">To Email:</label>
                                <input type="email" class"form-control" id="email" name="email" maxlength="50" x>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-9 form-group">
                                <label for="subject">Subject:</label>
                                <input type="text" class"form-control" id="subject" name="subject" maxlength="50">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-9 form-group">
                                <label for="message">Messege:</label>
                                <textarea name="messege" id="messege" maxlength="60000" placeholder="Type your message here"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9 form-group">
                                <button type="submit" name="sendmail" class="btn btn-lg btn-success btn-block">Send

                                </button>
                            </div>
                        </div> -->

                    </form>
    </center>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>