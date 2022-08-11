<?php include('includes/topfile.php'); ?>
<?php include('./controllers/user_activation.php'); ?>


    <div class="budget-app">
        <div class="vertical-center">
            <div class="inner-block">
            <h1>User Email Verification</h1>
                <?php echo $email_already_verified; ?>
                <?php echo $email_verified; ?>
                <?php echo $activation_error; ?>

                <p>If user account is verified then click on the following button to login.</p>
            <a class="btn btn-lg btn-success" href="http://localhost/acwict-budget-app/index.php">Click to Login
            </a>
            </div>
            
        </div>
    </div>
    <?php include('includes/bottomfile.php'); ?>
