<?php
    $servername="localhost";
    $username_db="u170697705_sofrootmain";
    $password="Sof@2023";
    $database="u170697705_sof";

    $conn= mysqli_connect($servername,$username_db,$password,$database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
?>