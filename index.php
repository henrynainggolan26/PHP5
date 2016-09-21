<?php
	include_once 'db.php';
	$user = $_SESSION['username'];
	session_start();
	$count_sidebar = $_SESSION['count_sidebar']; 
	$con = new DB_con();
	$sql = $con->select_title();
	while($result = mysqli_fetch_array($sql)){
		$content_temp= $result['content'];
		$content_new[] = $result['content'];
		$createat[] =  $result['create_at'];
		$updateat[] =  $result['update_at'];
		$title[] = $result['title'];
		$id_post[] = $result['id_post'];
		if(strlen($content_temp)>=20){
			$content[] = substr($content_temp,0, 20);
		}
		else{
			$content[] = $content_temp;
		}
	}
	if (!$sql) {
		die("Error: Data not found..");
	}
	$editid = 0;
	if(isset($_GET['id'])){
			$editid = $_GET['id']; 
	}
	echo "<table align='left' width='70%'>";
	echo "<tr >";	
	echo"<td><font color='black'> Title : " .$title[$editid]."</font></td>";
	echo "</tr>";
	echo "<tr>";
	echo"<td><font color='black'> Content : " .$content_new[$editid]."</font></td>";
	echo "</tr>";
	echo "</tr>";
	echo"<td> Create at : " .$createat[$editid]." ||
	Create at : " .$updateat[$editid]."</td>" ;
	echo "</tr>";
	echo "</table>";
	
	if($count_sidebar < 5){
		echo "<table align='right' width='30%'>";
		echo "<tr>5 Latest Blog :";
		for($i=0;$i<5;$i++)
		{
			echo "<td> <a href ='index.php?id=$i'>" .$content[$i]. "</td>";
			echo "</tr>";
		}echo "</table>";
	}
	else{
		echo "<table>";
		echo "<tr>". $count_sidebar ." Latest Blog :";
		for($i=0;$i<$count_sidebar;$i++)
		{
			echo "<td> <a href ='index.php?id=$i'>" .$content[$i]. "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
?>

<?php
	include_once('footer.php');
?>
