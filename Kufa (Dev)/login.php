<?php
    session_start();
    if(isset($_SESSION['log_status'])){
        header('location: dashbroad.php');
    }
    require_once 'includes/header.php';
    require_once 'includes/nav.php';
?>
<div class="row mt-3">
    <div class="col-lg-7 m-auto">
        <div class="card mb-3">
            <div class="card-header bg-secondary text-white text-center">
                <h4>Log In From</h4>
            </div>
            <div class="card-body">
                <form action="login_post.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_name">
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
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <button type="submit" class="btn btn-secondary">Log In</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    require_once 'includes/footer.php';
?>
