<?php include("./connect.php");

if ((isset($_POST["student_id"])) and (isset($_POST["company_id"]))) {
    $student_id=$_POST["student_id"];
    $company_id=$_POST["company_id"];
    $query="delete from allotments where student_id='$student_id' and company_id='$company_id'";
    $query_res=mysqli_query($conn,$query);
    echo 1;
}
?>