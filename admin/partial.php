<?php
  session_start();
  include("../connect.php");
  $url = "/sof_new/sof2023";
  $redirectUrl=$url."/admin/login.php";

  if(!(isset($_COOKIE["username"]))){
    header("Location: " . $redirectUrl);
    exit();
  }

    
?>