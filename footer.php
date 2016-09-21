<?php
	include_once 'db.php';
	$con = new DB_con;
	$name = "footer_text";
	$sql = $con->select_setting($name);
	$result = mysqli_fetch_array($sql);
	if (!$sql) {
			die("Error: Data not found..");
	}
	echo "<p align='center' width='100%' bottom='0px' position='absolute'>";	
	echo"<font color='black'>" .$result['value']. " " .date("Y") . " Software Seni</font>";
	echo "</p>";
?>