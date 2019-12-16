<?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
	$userid = Session::get("userid");
	echo $userid;
?>


<div class="container">
<h1>Your Profile</h1>
<div class="container">
	<form action="" method="post">
	<?php
	$getData = $usr->getUserData($userid);
	if($getData){
		$result = $getData->fetch_assoc();
?>
		<table>    
			 <tr>
			   <td>Name</td>
			   <td><input name="name" type="text" value="<?php echo $result['name']; ?>"/></td>
			 </tr>
			   <tr>
			   <td>Username</td>
			   <td><input name="username" type="text" value="<?php echo $result['username']; ?>"/></td>
			 </tr>
			 <tr>
			   <td>Email</td>
			   <td><input name="email" type="text" value="<?php echo $result['email']; ?>"/></td>
			 </tr>
			  <tr>
			  <td></td>
			   <td><input type="submit" value="Update"> </td>
			 </tr>
       </table>
	<?php } ?>
	   </form>
	   </div>
</div>
