<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Contact Page</title>
</head>

<body>
    <div class="container">
               <div class="time text-center mt-3">
            <h3 class="text-success">Current Local Date &amp; Time</h3>
            <h4 class="text-warning">Asia/Dhaka</h4>
            <h4 class="text-danger">
                <?php
                $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
                echo $dt->format('F j, Y, g:i a');
               ?>
            </h4>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="card mb-3">
                    <div class="card-header text-white bg-info">Our Calculator</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Number One</label>
                                <input type="number" class="form-control" name="number_one">
                            </div>
                            <div class="form-group">
                                <label>Number Two</label>
                                <input type="number" class="form-control" name="number_two">
                            </div>
                            <button name="add" type="submit" class="btn btn-outline-success">Add +</button>

                            <button name="subs" type="submit" class="btn btn-outline-info">Substract -</button>

                            <button name="mult" type="submit" class="btn btn-outline-warning">Multiply *</button>

                            <button name="divi" type="submit" class="btn btn-outline-secondary">Division /</button>

                            <button name="modu" type="submit" class="btn btn-outline-secondary">Modulus %</button>
                        </form>
                        <!-- PHP Code Start -->
                        <?php
                // Frist load Check
                if(isset($_POST["number_one"])){
                    //if number one is available
                    if($_POST["number_one"]){
                        //if number two is available
                        if($_POST["number_two"]){
                            ?>
                        <div class="alert alert-success mt-2 text-center">
                            Your Result Is: <?php
                                if(isset($_POST["add"])){
                                    echo ($_POST["number_one"]) + ($_POST["number_two"]);
                                }
                                elseif(isset($_POST["subs"])){
                                    echo ($_POST["number_one"]) - ($_POST["number_two"]);
                                }
                                elseif(isset($_POST["mult"])){
                                    echo ($_POST["number_one"]) * ($_POST["number_two"]);
                                }
                                elseif(isset($_POST["divi"])){
                                    $divi_result = ($_POST["number_one"]) / ($_POST["number_two"]);
                                    echo round($divi_result, 2);
                                }
                                elseif(isset($_POST["modu"])){
                                    echo ($_POST["number_one"]) % ($_POST["number_two"]);
                                }
                                ?>
                        </div>
                        <?php
                        }
                        else{
                            ?>
                        <div class="alert alert-danger mt-2 text-center">
                            <?php echo "number two is missing here!";?>
                        </div>
                        <?php
                        }
                    }
                    else{
                        ?>
                        <div class="alert alert-danger mt-2 text-center">
                            <?php echo "Number One is Messing";?>
                        </div>
                        <?php
                    }
                }
                        ?>
                        <!-- PHP Code End -->
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>
