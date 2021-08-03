<?php
    $host = 'localhost';
    $user = 'farhan';
    $password = '9004788819';
    $db_name = "dbms_pro";

    $con = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }
?>
