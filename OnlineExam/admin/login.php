<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/loginheader.php');
	include_once ($filepath.'/../classes/Admin.php');
	$ad = new Admin();
?>

<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$adminData = $ad->getAdminData($_POST);
	}
?>
<!-- <style>
.main h1{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 35px;
		color:#5e0c17;
}
.adminlogin{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 20px;
		color:#040303;
}
</style> --> 
<div class="container-fluid">
<h1>Admin Login</h1>
<div class="container-fluid">
	<form action="" method="post">
		<table>
			<tr> 
				<td>Username</td>
				<td><input type="text" name="adminUser" required/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="adminPass" required/></td>
			</tr>
			<tr>
				<td></td>
				<td> <input type="submit" name="login" value="Login"/></td>
			</tr>
			<tr>
				<td colspan="2">
				<?php
				if(isset($adminData)){
					echo $adminData;
				}
				?>
				</td>
			</tr>
		</table>
	</from>
</div>
</div>
