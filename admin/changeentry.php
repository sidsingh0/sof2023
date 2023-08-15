<?php 
include("../connect.php");

if (isset($_POST["student_id"]) && isset($_POST["company_id"])) {
    $student_id = $_POST["student_id"];
    $company_id = $_POST["company_id"];

    $query = "DELETE FROM allotments WHERE student_id = '$student_id' AND company_id = '$company_id'";
    $query_res = mysqli_query($conn, $query);

    if ($query_res) {
        echo 1;
    } else {
        echo 0;
    }
} else {
    echo 0;
}
?>