<?php
    session_start();
    if(!isset($_SESSION['log_status'])){
        header('location: login.php');
    }
    require_once 'includes/header.php';
    require_once 'includes/nav.php';
    require_once 'includes/db.php';
    $skill_query = "SELECT * FROM skills"; 
    $skill_db = mysqli_query($db_connect, $skill_query);
?>

   <h3>Skill</h3>
    <div class="row mt-3">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white text-center">
                    <h5>Skill List</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                    <?php
                    if(isset($_SESSION['skill_delete'])):?>
                        <div class="alert alert-danger">
                            <?php
                        echo $_SESSION['skill_delete'];
                        unset($_SESSION['skill_delete']);
                        ?>
                        </div>
                        <?php
                    endif;
                    ?>
                        <thead>
                            <tr>
                                <th scope="col">Skill Name</th>
                                <th scope="col">Skill full name and percentage</th>
                                <th scope="col">percentage</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($skill_db as $skill):
                        ?>
                            <tr>
                                <td><?=$skill['skill_name']?></td>
                                <td><?=$skill['skill_full']?></td>
                                <td><?=$skill['percentage']?></td>
                                <td><a href="skill_delete.php?id=<?=$skill['id']?>" class="btn btn-outline-danger">Delete</a></td>
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
                    <h4>Add Skill</h4>
                </div>
                <div class="card-body">
                    <form action="skill_post.php" method="POST">
                    <?php
                    if(isset($_SESSION['skill_succ'])):?>
                        <div class="alert alert-success">
                            <?php
                        echo $_SESSION['skill_succ'];
                        unset($_SESSION['skill_succ']);
                    ?>
                        </div>
                        <?php
                    endif;
                    ?>
                        <?php
                    if(isset($_SESSION['skill_error'])):?>
                        <div class="alert alert-danger">
                            <?php
                        echo $_SESSION['skill_error'];
                        unset($_SESSION['skill_error']);
                        ?>
                        </div>
                        <?php
                    endif;
                    ?>
                        <div class="form-group">
                            <label>skill name</label>
                            <input type="text" class="form-control" name="skill name">
                        </div>
                        <div class="form-group">
                            <label>skill full from and percentage</label>
                            <input type="text" class="form-control" name="skill full">
                        </div>
                        <div class="form-group">
                            <label>percentage</label>
                            <input type="number" class="form-control" name="percentage">
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