<?php
    session_start();
    require_once 'includes/header.php';
    require_once 'includes/nav.php';
?>
<div class="row mt-3">
    <div class="col-lg-6 m-auto">
        <div class="card mb-3">
            <div class="card-header bg-success text-white text-center">
                <h4>Registration From</h4>
            </div>
            <div class="card-body">
                <form action="Registration_post.php" method="post">
                    <div class="form-group">
                        <?php 
                        if(isset($_SESSION['pass_err'])){
                    ?>
                        <div class="alert alert-danger">
                            <?php 
                            echo $_SESSION['pass_err'];
                            unset($_SESSION['pass_err']);
                        ?>
                        </div>
                        <?php
                    }
                    ?>
                        <label>Full Name</label>
                        <input type="Text" class="form-control" placeholder="Enter Your Full Name" name="full name">
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter Your Gmail" name="email_name">
                        <?php if(isset($_SESSION['dublicate_gmai_err'])){
                            ?>
                        <small class="text-danger">
                            <?php
                                echo $_SESSION['dublicate_gmai_err'];
                                unset($_SESSION['dublicate_gmai_err']);
                                ?>
                        </small>
                        <?php
                        }?>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Your Password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">confirm Password</label>
                        <input type="password" class="form-control" placeholder="Enter Your Confirm Password" name="confirm_password">
                    </div>
                    <div class="form-group">
                        <p>Please select your gender:</p>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label><br>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label><br>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">Other</label>
                    </div>
                    <button type="submit" class="btn btn-outline-success">Register</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    require_once 'includes/footer.php';
?>
