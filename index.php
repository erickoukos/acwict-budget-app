<?php
include("includes/topfile.php");
// echo "Cookies: " . $_COOKIE['auth_id'];
include("config/connect.php");
include("validation.php");
include("header.php");
include("controllers/signin.php");

?>

<h1>Welcome Back!</h1>

<!-- Login Form -->
<div class="budget-app">
    <div class="vertical-center">
        <div class="inner-block">
            <form action="" method="post">
                <h3>Login to Your Account</h3>

                <?php echo $accountNotExistErr;  ?>
                <?php echo $emailPwdErr;  ?>
                <?php echo $verificationRequiredErr;  ?>
                <?php echo $email_empty_err;  ?>
                <?php echo $pass_empty_err;  ?>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email_signin" id="email_signin" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password_signin" id="password_signin" class="form-control">
                </div>
                <button type="submit" name="login" id="sign_in" class="btn btn-outline-primary btn-lg btn-block">Login</button>

                <button class="btn btn-primary btn-lg btn-block button-link"><a href='http://localhost/acwict-budget-app/forgot_password.php' style="text-decoration: none; color: white;" >Reset Password</a></button>
            </form>
        </div>
    </div>
</div>
    
<p><a href="signup.php">Register Here</a></p>
<?php include ("includes/bottomfile.php"); ?>