<?php

class DB{
    function user_all(){
        $db_connect = mysqli_connect('localhost', 'root', '', 'php registration data');
        $select_query = "SELECT * FROM users";
        $from_db = mysqli_query($db_connect, $select_query);
        return $from_db;
    }
}

$db = new DB;
foreach($db -> user_all() as $user){
    print_r($user['emai_address']);
    echo "</br>";
}

?>