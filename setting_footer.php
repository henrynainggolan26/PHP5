<?php
	include_once('header.php');
	session_start();
	include_once 'db.php';
	$con = new DB_con();
	$sql = $con->select_setting('footer_text');
	$result = mysqli_fetch_row($sql);
	if($result==""){
?>
<form action="" method="post">
	<tr> 
 		<td valign="top"><label>Input Copyright : </label></td>
 		<td valign="top">:</td>
 		<td><input placeholder="Copyright" type="text" name="copyright" size="30" value="" required></td>
 	</tr>
 	<tr>
 		<td colspan="3" align="right"><button type="submit" name="save">Save</button></td>
 	</tr>
</form>
<?php
	if(isset($_POST['save'])){
		$cr = $_POST['copyright'];
		$con->insert_setting('footer_text',$cr);
	}
	
	}
	else{
		echo "Copyright : " .$result[2];
		echo "<br/>";
		echo "<br/>";
?>
<form action="" method="post">
	<tr> 
		<label> Edit Copyright</label>
		<br/>
 		<td valign="top"><label>Input Copyright </label></td>
 		<td valign="top">:</td>
 		<td><input placeholder="Copyright" type="text" name="copyright" size="30" value="" required></td>
 	</tr>
 	<tr>
 		<td colspan="3" align="right"><button type="submit" name="edit">Save</button></td>
 	</tr>
</form>
<?php
	if(isset($_POST['edit'])){
		$cr = $_POST['copyright'];
		$con->update_setting('footer_text',$cr);
		header('Location: setting_footer.php');
	}
	}
?>