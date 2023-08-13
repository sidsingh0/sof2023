<?php
    include("../../connect.php");
    
    if(isset($_POST["company_id"])){
        $phone = $_POST["phone"];
        $company = $_POST["company_id"];
        $status = $_POST["status"];

        $query = "update allotments set status='$status' where student_id=$phone and company_id=$company";
        $res = mysqli_query($conn, $query);

        if($res){
            echo 1;
        }
    }
?>