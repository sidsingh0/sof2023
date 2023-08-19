<?php
  session_start();
  include("../../connect.php");
  $url = "/sof2023";
  $redirectUrl=$url."/admin/company";

  if(!(isset($_COOKIE["company"]))){
    header("Location: " . $redirectUrl);
    exit();
  }else{
    $company = $_COOKIE["company"];
    $qq="select * from companies where id=$company";
    $rr=mysqli_query($conn, $qq);
    if(mysqli_num_rows($rr) < 1){
      $comp_name = "";
    }else{
      $comp_name = $rr->fetch_assoc()["company_name"];
    }
  }

    
?>