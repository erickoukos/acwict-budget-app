<?php
include("includes/topfile.php");
// echo "Cookies: " . $_COOKIE['auth_id'];
include("config/connect.php");
include("validation.php");

?>

<h1>Welcome Back!</h1>

<!-- Login Form -->
<div class="budget-app">
    <div class="vertical-center">
        <div class="inner-block">
            <form action="" method="post">
                <h3>Login to Your Account</h3>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email_signin" id="email_signin" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password_signin" id="password_signin" class="form-control">
                </div>
                <button type="submit" name="login" id="sign_in" class="btn btn-outline-primary btn-lg btn-block">Login</button>
            </form>
        </div>
    </div>
</div>
    
<p><a href="signup.php">Register Here</a></p>
<?php include ("includes/bottomfile.php"); ?>