<?php
    include("../connect.php");
    
    if(isset($_POST["company_id"])){
        $company_id = $_POST["company_id"];
        $student_id = $_POST["student_id"];


        $query = "insert into allotments (student_id,company_id) VALUES ('$student_id','$company_id')";
        $res = mysqli_query($conn, $query);

        if($res){
            echo $attended;
        }else{
            echo $prev;
        }

        
    }

?>