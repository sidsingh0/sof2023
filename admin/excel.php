<?php
try{
	include ("../connect.php");
	$filename= $_POST['submit'].".xls";
	header("Content-Type: application/vnd.ms-excel;");    
	header("Content-Disposition: attachment; filename=\"$filename\""); 
        if(isset($_POST['submit'])){    
		    $category =$_POST['submit'];
		if($category){
			$sql="select * from $category";
		}
		$result = mysqli_query($conn, $sql);
		$sep = "\t";
		$fields = $result->fetch_fields();
		foreach ($fields as $field) {
			echo $field->name . "\t";
		}
		print("\n");    
    		while($row = mysqli_fetch_row($result)){
        		$schema_insert = "";
        		for($j=0; $j<mysqli_num_fields($result);$j++){
            			if(!isset($row[$j]))
                			$schema_insert .= "NULL".$sep;
            			elseif ($row[$j] != "")
                			$schema_insert .= $row[$j].$sep;
            			else
                			$schema_insert .= "".$sep;
			}
			$schema_insert = str_replace("uploads/", "https://jobfair.siddharthovalekarfoundations.com/uploads/", $schema_insert);
			$schema_insert = str_replace($sep."$", "", $schema_insert);
			$schema_insert = str_replace(",", " ", $schema_insert);
			$schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        	$schema_insert .= "\t";
        	print(trim($schema_insert));
        	print "\n";
		} 
		header("Refresh: 1; url=/sof2023/admin/view-data.php");
	    }
	    else{
		    echo 'BLUE';
	    }
}
catch(Exception $e){echo $e->getMessage();}
?>
