<?php
    include("../connect.php");
    
    if(isset($_POST["company_id"])){
        $company_id = $_POST["company_id"];
        $student_id = $_POST["student_id"];

        $select_query="select * from allotments where student_id=$student_id and company_id=$company_id";
        $select_query_res=mysqli_query($conn,$select_query);

        if (!$select_query_res){
            echo '{"status":0,"error":"Database error (select)."}';
            exit();
        }
        if(mysqli_num_rows($select_query_res)>0){
            echo '{"status":0,"error":"Company has already been allotted to this student before."}';
            exit();
        }
    
        $query = "insert into allotments (student_id,company_id) VALUES ('$student_id','$company_id')";
        $res = mysqli_query($conn, $query);

        if(!$res){
            echo '{"status":0,"error":"Database error (insert)."}';
            exit();
        }else{
            echo '{"status":1,"error":"'.$student_id.' allotted successfully"}';
            exit();
        }

        
    }

?>