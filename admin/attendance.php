<?php
    include("../connect.php");
    
    if(isset($_POST["attended"])){
        $myObj = 0;
        $phone = $_POST["phone"];
        $attended = $_POST["attended"];
        $prev = $attended;

        if($attended == 1){
            $attended = 0;
        }else{
            $attended = 1;
        }

        $query = "update students set attended=$attended where phone=$phone";
        $res = mysqli_query($conn, $query);

        if($res){
            echo $attended;
        }else{
            echo $prev;
        }

        
    }

?>