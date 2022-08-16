<?php include('includes/topfile.php'); ?>
<div class="budget-app">
    <div class="vertical-center">
        <div class="card-header text-center">
            Reset Password
        </div>
        <div class="inner-block">
            <?php
            if ($_GET['key'] && $_GET['token']) {
                include("config/connect.php");
                $email = $_GET['key'];
                $token = $_GET['token'];
                $query = mysqli_query(
                    $connection,
                    "SELECT * FROM `users` WHERE `reset_link_token`='" . $token . "' and `email`='" . $email . "';"
                );
                $curDate = date("Y-m-d H:i:s");
                if (mysqli_num_rows($query) > 0) {
                    $row = mysqli_fetch_array($query);
                    if ($row['exp_date'] >= $curDate) { ?>
                        <form action="update-forget-password.php" method="post">
                            <input type="hidden" name="email" value="<?php echo $email; ?>">
                            <input type="hidden" name="reset_link_token" value="<?php echo $token; ?>">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name='password' class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" name='cpassword' class="form-control">
                            </div>
                            <input type="submit" name="new-password" class="btn btn-primary">
                        </form>
            <?php }
                } else {
                    echo '<p>This forget password link has been expired</p>';
                }
            }
            ?>
        </div>
    </div>
</div>