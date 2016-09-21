<?php 
session_start();
//set session when logout 
if($_SESSION['username'] == ""){
	header('Location: login.php');
}
?>
<div class="header">
	<img src="/uploadslogo.png" alt="logo" width="100" height="50" />
</div>
<?php
echo '<a href="setting_header.php">Setting Header</a> -
<a href="setting_sidebar.php">Setting Sidebar</a> -
<a href="setting_footer.php">Setting Footer</a> -
<a href="setting_content.php">Setting Content</a> -
<a href="profile.php">Profile</a> -
<a href="logout.php">Logout</a>';