<?php
    include("../connect.php");
    
    if(isset($_POST["company_id"])){
        $company_id = $_POST["company_id"];
        $student_id = $_POST["student_id"];

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