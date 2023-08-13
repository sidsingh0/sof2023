<?php
    include("../connect.php");
    if(isset($_POST["apti_marks"])){
        $phone = $_POST["phone"];
        $apti_marks = $_POST["apti_marks"];

        $query = "update students set apti_marks=$apti_marks where phone=$phone";
        $res = mysqli_query($conn, $query);

        if($res){
            echo 1;
        }else{
            echo 0;
        } 
    }
?>