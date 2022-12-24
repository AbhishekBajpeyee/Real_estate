


<!DOCTYPE html>
<html>

<head>
    <title>Aadhar Card Verify</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
<!-- Modal -->

<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="signupModalLabel">Signup for an iDiscuss Account...</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/forum/partials/_handleSignup.php" method="post">
            <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"required>
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp"required>
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signupPassword" name="signupPassword"required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
                        <input type="password" class="form-control" id="signupcPassword" name="signupcPassword"required>
                    </div>
                    <div class="mb-3">
        <div class="col-md-6" style="margin-top: 5px;">
            
                <label for="exampleInputAadharCard">Aadhar Card No.</label>
                <input type="text" class="form-control" id="exampleInputAadharCard" placeholder="Enter Your Aadhar Card No." name="exampleInputAadharCard" required>
                <small id="message" class="form-text text-muted"></small>
            
            <button type="button" class="btn btn-primary"  onclick="verify()">Verify</button>
        </div>
    </div> 
     <script type="text/javascript">
        // multiplication table
        const d = [
            [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
            [1, 2, 3, 4, 0, 6, 7, 8, 9, 5],
            [2, 3, 4, 0, 1, 7, 8, 9, 5, 6],
            [3, 4, 0, 1, 2, 8, 9, 5, 6, 7],
            [4, 0, 1, 2, 3, 9, 5, 6, 7, 8],
            [5, 9, 8, 7, 6, 0, 4, 3, 2, 1],
            [6, 5, 9, 8, 7, 1, 0, 4, 3, 2],
            [7, 6, 5, 9, 8, 2, 1, 0, 4, 3],
            [8, 7, 6, 5, 9, 3, 2, 1, 0, 4],
            [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]
        ]

        // permutation table
        const p = [
            [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
            [1, 5, 7, 6, 2, 8, 3, 0, 9, 4],
            [5, 8, 0, 3, 7, 9, 6, 1, 4, 2],
            [8, 9, 1, 6, 0, 4, 3, 5, 2, 7],
            [9, 4, 5, 3, 1, 2, 6, 8, 7, 0],
            [4, 2, 8, 6, 5, 7, 3, 9, 0, 1],
            [2, 7, 9, 3, 8, 0, 6, 4, 1, 5],
            [7, 0, 4, 6, 9, 1, 3, 2, 5, 8]
        ]

        // validates Aadhar number received as string
        function validate(aadharNumber) {
            let c = 0
            let invertedArray = aadharNumber.split('').map(Number).reverse()

            invertedArray.forEach((val, i) => {
                c = d[c][p[(i % 8)][val]]
            })

            return (c === 0)
        }

        function verify() {
            var message = document.getElementById("message");
            var aadharNo = document.getElementById("exampleInputAadharCard").value;
            if (validate(aadharNo)) {
                message.innerHTML = 'Your aadhar card no. valid';
            } else {
                message.innerHTML = 'Your aadhar card no. not valid';
            }
        }
    </script>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    
                </div>
            </form>
    </div>
  </div>
</div>

</body>

</html>
