<?php include 'inc/header.php'; ?>
<?php
	Session::checkLogin();
?>
<div class="container-fluid p-3">

	<form action="" method="post">
		<table class="tbl">    
			 <tr>
			   <td>Email</td>
			   <td><input name="email" type="text" id = "email"></td>
			 </tr>
			 <tr>
			   <td>Password </td>
			   <td><input name="password" type="password" id = "password"></td>
			 </tr>
			 
			  <tr>
			  <td></td>
			   <td><input type="submit" id="loginsubmit" value="Login">
			   </td>
			 </tr>
       </table>
	   </form>
	   <p>New User ? <a href="register.php">Signup</a> Free</p>	
</div>
