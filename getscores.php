<?php include("./connect.php");

if ((isset($_GET["phone"])) and (isset($_GET["dob"]))) {
    $phone=$_GET["phone"];
    $dob=$_GET["dob"];
    $query="select apti_marks,attended from students where phone='$phone' and dob='$dob'";
    $query_res=mysqli_query($conn,$query);

    $query2="select a.*,c.company_name from allotments a, companies c where student_id='$phone' and a.company_id=c.id order by timestamp DESC";
    if (mysqli_num_rows($query_res)<1){
        echo '{"status":0,"message":"Invalid student details."}';
    }else{
        $query2_res=mysqli_query($conn,$query2);
        if (mysqli_num_rows($query2_res) > 0) {
            $companyData = array();
            while ($company = $query2_res->fetch_assoc()) {
                $companyData[] = array(
                    "company" => $company["company_name"],
                    "result" => $company["status"]
                );
            }
            $companiesJSON = json_encode($companyData);
        $query_res=$query_res->fetch_assoc();
        echo '{"status":1,"aptitude":'.$query_res["apti_marks"].',"attendance":'.$query_res["attended"].',"allotment":'.$companiesJSON.'}';
    }
}}else{
    echo '{"status":0,"message":"Please input both fields."}';
}
?>