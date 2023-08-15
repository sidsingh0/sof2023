<?php
header('Content-Type: application/json');

include('../../connect.php');

$sqlQuery = "SELECT  result, count(*) as count
FROM  (
      SELECT  SUBSTRING_INDEX(SUBSTRING_INDEX(categories, ',', a.letter + 1), ',', -1) result
        FROM  companies
          INNER JOIN (SELECT 0 letter UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3) a ON LENGTH(REPLACE(categories, ',' , '')) <= LENGTH(categories) - a.letter
      ) a
GROUP BY result
HAVING COUNT(result) >= 1  
ORDER BY result";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
    if($row["result"] != ""){
	    $data[] = $row;
    }
}

mysqli_close($conn);

echo json_encode($data);
?>