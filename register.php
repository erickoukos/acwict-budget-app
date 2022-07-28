<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>
    <?php
// include 'connect.php';
?>
<div class="container p-3">
    <div class="panel panel-default">
        <div class="panel-heading">Registration Form</div>
        <div class="panel-body">
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="Username">Username: </label>
                    <input type="text" name="username" id="userName" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="Email">Email: </label>
                    <input type="text" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="FirstName">First Name: </label>
                    <input type="text" name="first_name" id="firstName" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="LastName">Last Name: </label>
                    <input type="text" name="last_name" id="lastName" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="Password">Confirm Password</label>
                    <input type="password" name="password_confirm" id="passwordConfirm" class="form-control" required>
                </div>
                <div class="form-group">
                    <!-- <label for="Register Account">Register Account</label> -->
                    <input type="submit" value="Register" class="btn btn-primary mb-3">
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>