<?php
require_once "one.php";

foreach($db -> select("users") as $brands){
    print_r($brands);
}
?>