<?php include('./controllers/user_activation.php'); ?>

    <div class="container">
        <div class="jumbotron text-center">
            <h1 class="display-4">User Email Verification</h1>
            <div class="col-12 mb-5 text-center">
                <?php echo $email_already_verified; ?>
                <?php echo $email_verified; ?>
                <?php echo $activation_error; ?>
            </div>
            <p class="lead">If user account is verified then click on the following button to login.</p>
            <a class="btn btn-lg btn-success" href="http://localhost/acwict-budget-app/index.php"
               >Click to Login
            </a>
        </div>
    </div>
