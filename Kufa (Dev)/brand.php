<?php
    session_start();
    require_once 'includes/header.php';
    require_once 'includes/nav.php';
    require_once 'includes/db.php';
    $brand_query = "SELECT * FROM brands"; 
    $brand_db = mysqli_query($db_connect, $brand_query);
?>

   <h3>Brand Image</h3>
    <div class="row mt-3">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white text-center">
                    <h5>Brand List</h5>
                </div>
                <div class="card-body " style="background-color: #152136;">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Brand Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($brand_db as $brand):
                        ?>
                            <tr>
                                <td>
                                <img src="image/brand_image/<?=$brand['brand_image_name']?>" alt="Not Found">
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Add Brand</h4>
                </div>
                <div class="card-body">
                    <form action="brand_post.php" method="POST" enctype="multipart/form-data">
                        <?php
                    if(isset($_SESSION['brand_image'])):?>
                        <div class="alert alert-success">
                            <?php
                        echo $_SESSION['brand_image'];
                        unset($_SESSION['brand_image']);
                    ?>
                        </div>
                        <?php
                    endif;
                    ?>
                        <?php
                    if(isset($_SESSION['img_err'])):?>
                        <div class="alert alert-danger">
                            <?php
                        echo $_SESSION['img_err'];
                        unset($_SESSION['img_err']);
                    ?>
                        </div>
                        <?php
                    endif;
                    ?>
                        <?php
                    if(isset($_SESSION['format_err'])):?>
                        <div class="alert alert-danger">
                            <?php
                        echo $_SESSION['format_err'];
                        unset($_SESSION['format_err']);
                    ?>
                        </div>
                        <?php
                    endif;
                    ?>
                        <div class="form-group">
                            <label>Select Brand Image</label>
                            <input type="file" class="form-control" name="brand_image">
                        </div>
                        <button type="submit" class="btn btn-dark">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once 'includes/footer.php';
?>