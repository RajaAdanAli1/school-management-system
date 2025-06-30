<?php
    $server = "localhost";
   
    $user = "root";
    $password = "Ublox@$7860";
    $db = "school-management-system";
    
    $conn = mysqli_connect($server, $user, $password, $db);

    if (!$conn) {
        header('Location: ../errors/error.html');
        exit();
    }


?>