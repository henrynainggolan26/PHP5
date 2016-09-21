<?php
	include_once('header.php');

	session_start();
	include_once 'db.php';
	$con = new DB_con();
	$datecreate = " ";
	if(isset($_GET['edit_id'])){
		$editid = $_GET['edit_id'];
		$sql = $con->select_update($editid);
		$result = mysqli_fetch_array($sql);
		if (!$sql) {
			die("Error: Data not found..");
		}
		$title=$result['title'] ;
		$content= $result['content'];
		$datecreate = $result['create_at'];
?>
<form action="" method="post" enctype="multipart/form-data">
	<table align="left">
 		<tr> 
 			<td valign="top"><label>Title</label></td>
 			<td valign="top">:</td>
 			<td><input placeholder="Title" type="text" name="title" size="30" value="<?php echo $title ?>" required></td>
 		</tr>
 		<tr> 
			 <td valign="top"><label>Content</label></td>
			 <td valign="top">:</td>
			 <td><textarea name="content" rows="5" cols="50" placeholder="Description" required ><?php echo $content?></textarea><br><br></td>
 		</tr>
 		<tr>
 			<td colspan="3" align="right"><button type="submit" name="save">Save</button></td>
 		</tr>
 	</table>
 </form>
<?php
	}
	else {
?>
<form action="" method="post" >
	<table>
 		<tr> 
 			<td valign="top"><label>Title</label></td>
 			<td valign="top">:</td>
 			<td><input placeholder="Title" type="text" name="title" size="30" value="<?php echo isset($_POST['title']) ? $_POST['title'] : '';?>" required></td>
 		</tr>
 		<tr> 
			 <td valign="top"><label>Content</label></td>
			 <td valign="top">:</td>
			 <td><textarea name="content" rows="5" cols="50" placeholder="Description" required></textarea><br><br></td>
 		</tr>
 		<tr>
 			<td colspan="3" align="right"><button type="submit" name="submit">Save</button></td>
 		</tr>
 	</table>
</form>
<?php
		$sql = $con->select_setting('logo_text');
		$result = mysqli_fetch_row($sql);
		if($result==""){
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
   Select logo to upload:
   <input type="file" name="fileToUpload" id="fileToUpload">
   <input type="submit" value="Upload Image" name="submit">
</form>

<?php
	
	}
	}
?>

<?php 
	$user = $_SESSION['username'];

	//show data
	$result = $con->select();
	echo "<table border='1' cellpadding='5' align='right'>"; 
	echo "<tr> <th> ID Post </th> <th> Title</th>  <th> Content </th> <th> User ID </th> <th> Create at</th> <th> Update at </th> <th> Action </th></tr>";
	while ($test = mysqli_fetch_array($result)) {
		$id = $test['id_post'];
		echo "<tr align='left'>";	
		echo"<td><font color='black'>" .$test['id_post']."</font></td>";
		echo"<td><font color='black'>" .$test['title']."</font></td>";
		echo"<td><font color='black'>". $test['content']. "</font></td>";
		echo"<td><font color='black'>". $test['user_id']. "</font></td>";
		echo"<td><font color='black'>". $test['create_at']. "</font></td>";
		echo"<td><font color='black'>". $test['update_at']. "</font></td>";	
		echo"<td> <a href ='setting_header.php?edit_id=$id'><center>Edit</center></a> <a href ='setting_header.php?delete_id=$id'><center>Delete</center></a>";
		echo "</tr>";
	}
	echo "</table>";

	//insert data
	if(isset($_POST['submit'])){
		$date = date("Y-m-d H:i:s");
		$title = $_POST['title'];
		$content = $_POST['content'];
		$id_user = $_SESSION['id_user'];

		if($title && $content != ""){
			$con->insert($title, $content, $id_user, $date, $date);
			header("Refresh:0");
		}
		else{
			echo "Correct input";
		}
	}

	//edit data
	if(isset($_POST['save'])){
		$title = $_POST['title'];
		$content = $_POST['content'];
		$id_user = $_SESSION['id_user'];
		$dateupdate = date("Y-m-d H:i:s");
		if($title && $content != ""){
			$con->update($editid, $title, $content, $id_user, $datecreate, $dateupdate);
			header('Location: setting_header.php');
		}
		else{
			echo "Correct input";
		}	
	}

	//delete data
	if(isset($_GET['delete_id'])){
		$id = $_GET['delete_id'];
		$res = $con->delete($id);
		header('Location: setting_header.php');
	}
	include_once 'footer.php';
?>

