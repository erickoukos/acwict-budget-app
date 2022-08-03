<?php
include("includes/topfile.php");
include("controllers/register.php");
?>

<div class="budget-app">
    <div class="vertical-center">
        <div class="inner-block">
            <form action="" method="post">
                <h3>Create an Account</h3>

                <?php echo $success_msg; ?>
                <?php echo $email_exist; ?>
                <?php echo $email_verify_err; ?>
                <?php echo $email_verify_success; ?>

                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstName" class="form-control">
                <?php echo $fNameEmptyErr; ?>
                <?php echo $f_NameErr; ?>
                </div>

                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastName" class="form-control">
                    <?php echo $lNameEmptyErr; ?>
                    <?php echo $l_NameErr; ?>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                    <?php echo $_emailErr ?>
                    <?php echo $emailEmptyErr ?>
                </div>

                <div class="form-group">
                    <label for="mobilenumber">Mobile Number</label>
                    <input type="text" name="mobilenumber" id="mobileNumber" class="form-control">
                    <?php echo $_mobileErr ?>
                    <?php echo $mobileEmptyErr ?>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <?php echo $_passwordErr; ?>
                    <?php echo $passwordEmptyErr; ?>
                </div>

                <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">Register</button>
            </form>
        </div>
    </div>
</div>
<?php
include ("includes/bottomfile.php");

?>