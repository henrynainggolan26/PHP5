<?php
include_once('header.php');
include_once 'db.php';
session_start();
$con = new DB_con();
$max=9;
?>
<form action="" method="post">
	<tr> 
		<td valign="top"><label>Count of sidebar </label></td>
		<td valign="top">:</td>
		<td><input placeholder="Count" type="number" min="1" name="count" size="30" value="" required></td>
	</tr>
	<tr>
		<td colspan="3" align="right"><button type="submit" name="save">Save</button></td>
	</tr>
</form>
<?php
$result = $con->select();
echo "<table border='1' cellpadding='5' align='right'>"; 
echo "<tr> <th> ID Post </th> <th> Title</th>  <th> Content </th> <th> Create at</th> <th> Update at </th></tr>";
while ($test = mysqli_fetch_array($result)) {
	$id = $test['id_post'];
	echo "<tr align='left'>";	
	echo"<td><font color='black'>" .$test['id_post']."</font></td>";
	echo"<td><font color='black'>" .$test['title']."</font></td>";
	echo"<td><font color='black'>". $test['content']. "</font></td>";
	echo"<td><font color='black'>". $test['create_at']. "</font></td>";
	echo"<td><font color='black'>". $test['update_at']. "</font></td>";	
	echo "</tr>";
}
echo "</table>";

if(isset($_POST['save'])){
	$_SESSION['count_sidebar'] = $_POST['count'];
}
include_once 'footer.php';