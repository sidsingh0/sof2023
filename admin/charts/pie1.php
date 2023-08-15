<?php
header('Content-Type: application/json');

include('../../connect.php');

$sqlQuery = "select category, count(*) as count from students GROUP BY category;";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>