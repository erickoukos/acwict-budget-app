<?php include('includes/topfile.php');
include('header.php')
?>


<div class="budget-app">
    <div class="vertical-center">
        <div class="inner-block">
            <form action="password_reset_token.php" method="post">
                <h3>Send Password Reset Link</h3>
                <div class="form-group">
                    <label for="Email1">Email Address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <input type="submit" name="password-reset-token" class="btn btn-outline-primary btn-block">
            </form>
        </div>
    </div>
</div>


<?php include('includes/bottomfile.php') ?>