<?php
    session_start();
    require_once 'includes/db.php';
    $image_name = $_FILES['new_profile_image']['name'];
    if(!$_FILES['new_profile_image']['name']){
        echo "Pic daw";
        die();
    }
    $name_after_explode = explode(".", $image_name);
    $extension = end($name_after_explode);
    $accepted_extension = ['png', 'PNG', 'JPG', 'jpg', 'jpeg', 'JPEG'];
    if(!in_array($extension, $accepted_extension)){
        echo "This file format is not supported!";
        die();
    }
    if($_FILES['new_profile_image']['size'] <= 1000){
        echo "Tumr file obbosoi 50kb thika choto howa lagbe.";
        die();
    }
    // Id number ber korlam
    $email_address_from_login_page = $_SESSION['email_address_from_login_page'];
    $get_id_query = "SELECT id, profile_image FROM users WHERE emai_address='$email_address_from_login_page'";
    $user_id = mysqli_fetch_assoc(mysqli_query($db_connect, $get_id_query))['id'];
    $db_profile_image_name = mysqli_fetch_assoc(mysqli_query($db_connect, $get_id_query))['profile_image'];
    
    if($db_profile_image_name != "default.png"){
        unlink("image/profile image/" . $db_profile_image_name);
    }
    // Image upload start
    $image_new_name = $user_id . "." . $extension;
    $tmp_location = $_FILES['new_profile_image']['tmp_name']; 
    $new_location = "image/profile image/" . $image_new_name;
    move_uploaded_file($tmp_location, $new_location);
    // Image upload end

    //database update start
    $img_update_query= "UPDATE users SET profile_image='$image_new_name' WHERE emai_address='$email_address_from_login_page'";
    mysqli_query($db_connect, $img_update_query);
    $_SESSION['service_delete'] = "Rrand Image added successfully";
    header('location: profile.php');
    //database update end
?>