<?php
session_start();
if(!$_POST['number_one']){
    $_SESSION['error']['number_one_err'] = "Number One is Missing";
    header('location: index.php');
    die();
}
if(!$_POST['number_two']){
    $_SESSION['error']['number_two_err'] = "Number Two is Missing";
    header('location: index.php');
    die();
}

// Accounts 
if(isset($_POST["add"])){
    $_SESSION["result"] = ($_POST["number_one"]) + ($_POST["number_two"]);
}
elseif(isset($_POST["subs"])){
    $_SESSION["result"] = ($_POST["number_one"]) - ($_POST["number_two"]);
}
elseif(isset($_POST["mult"])){
    $_SESSION["result"] = ($_POST["number_one"]) * ($_POST["number_two"]);
}
elseif(isset($_POST["divi"])){
    $_SESSION["result"] = ($_POST["number_one"]) / ($_POST["number_two"]);
}
elseif(isset($_POST["modu"])){
    $_SESSION["result"] = ($_POST["number_one"]) % ($_POST["number_two"]);
}
header('location: index.php');
?>