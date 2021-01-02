<?php
    session_start();
    if(!isset($_SESSION['log_status'])){
        echo "Your are not allow";
        header('location: login.php');
        die();
    }
    require_once 'includes/header.php';
    require_once 'includes/nav.php';
    require_once 'includes/db.php';
    $email_address_from_session = $_SESSION['email_address_from_login_page'];
    $name_select_query  = "SELECT full_name FROM users WHERE emai_address = '$email_address_from_session'";
?>

<h1>Welcome, to our dashbroad</h1>
<h2>Your Name: <?=mysqli_fetch_assoc(mysqli_query($db_connect, $name_select_query))['full_name']?></h2>
<h2>Your Email: <?=$_SESSION['email_address_from_login_page']?></h2>

<?php
    require_once 'includes/footer.php'
?>