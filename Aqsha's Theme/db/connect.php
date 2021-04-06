<?php
    $db = new mysqli("localhost:3306", "root", "", "webappproject");
    if($db -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_errorno;
        exit();
    }
?>