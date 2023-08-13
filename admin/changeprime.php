<?php
    include("../connect.php");
    
    if(isset($_POST["top"])){
        $myObj = 0;
        $phone = $_POST["phone"];
        $top = $_POST["top"];
        $prev = $top;

        if($top == 1){
            $top = 0;
        }else{
            $top = 1;
        }

        $query = "update students set top=$top where phone=$phone";
        $res = mysqli_query($conn, $query);

        if($res){
            echo $top;
        }else{
            echo $prev;
        } 
    }
?>