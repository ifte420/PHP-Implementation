<?php
    session_start();
    if(!isset($_SESSION['log_status'])){
        header('location: login.php');
    }
    require_once 'includes/header.php';
    require_once 'includes/nav.php';
    require_once 'includes/db.php';
    $text_setting_query = "SELECT * FROM text_setting"; 
    $text_query = mysqli_query($db_connect, $text_setting_query);
?>

    <h3 class="text-center">All Text Document</h3>
    <div class="row mt-3">
        <div class="col-6 m-auto">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Text Setting</h4>
                </div>
                <div class="card-body">
                    <form action="setting_post.php" method="POST">
                    <?php
                    if(isset($_SESSION['setting_status'])){?>
                    <div class="alert alert-success">
                        <?php
                        echo $_SESSION['setting_status'];
                        unset($_SESSION['setting_status']);
                    ?>
                    </div>
                <?php
                }
                ?>
                    <?php foreach($text_query as $text_setting):?>
                        <div class="form-group">
                            <label class="form-check-label" for="exampleCheck1"><?=$text_setting['setting_name']?></label>
                            <input type="text" class="form-control" id="exampleCheck1" value="<?=$text_setting['setting_value']?>" name="<?=$text_setting['setting_name']?>">
                        </div>
                    <?php endforeach; ?>
                        <button type="submit" class="btn btn-dark">Update Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once 'includes/footer.php';
?>