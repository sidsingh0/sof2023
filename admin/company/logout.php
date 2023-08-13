<?php
    session_start();
    setcookie("company", "", time() - 3600);
    session_destroy();
    header("Location: index.php");

?>