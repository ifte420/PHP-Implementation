<?php
    session_start();
    require_once 'includes/db.php';
    $emai_address = $_POST['email_name'];
    $pass = md5($_POST['password']);

    $count_query = "SELECT COUNT(*) AS total FROM users WHERE emai_address = '$emai_address' AND password = '$pass'";

    $from_db = mysqli_query($db_connect, $count_query);
    $after_assoc = mysqli_fetch_assoc($from_db);
    print_r($after_assoc);

if($after_assoc['total'] == 1){
    $_SESSION['log_status'] = "Yes";
    $_SESSION['email_address_from_login_page'] = $emai_address;
    header('location: dashbroad.php');
}
else {
    $_SESSION['dublicate_gmai_err'] = "Your email & password worng! Plz try again";
    header('location: login.php');
}
?>
