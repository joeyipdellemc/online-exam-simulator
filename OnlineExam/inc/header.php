<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Session.php');
	Session::init();
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
	
	spl_autoload_register(function($class){
		include_once "classes/".$class.".php";
	});
	$db  = new Database();
	$fm  = new Format(); 
	$usr = new User();
	$exm = new Exam();
	$pro = new Process();
	
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>

<!doctype html>
<html>
<head>
	<title>Online Exam Simluator</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<!--<script type = "text/javascript" src="jvascrpt/jquery.js"></script>-->
   	<script type = "text/javascript" src="jvascrpt/main.js"></script> 
</head>

<body>
	<?php
		if(isset($_GET['action']) && $_GET['action'] == 'logout'){
			Session::destroy();
			header("Location:index.php");
			exit();
		}
	?>
<div class="container-fluid p-3"> 
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  		<a class="navbar-brand" href="#">MalfuncStudio</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
 		</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav">
		
		<?php
			$login = Session::get("login");
			if($login == true){
		?>
      			<li class="nav-item active">
        			<a class="nav-link" href="exam.php">Exam<span class="sr-only">(current)</span></a>
      			</li>

      			<li class="nav-item">
        			<a class="nav-link" href="?action=logout">Logout</a>
      			</li>
      	<?php } else { ?> 

      		    <li class="nav-item active">
        			<a class="nav-link" href="index.php">Login<span class="sr-only">(current)</span></a>
      			</li>

      			<li class="nav-item">
        			<a class="nav-link" href="register.php">Register<span class="sr-only">(current)</span></a>
      			</li>

      			<li class="nav-item">
        			<a class="nav-link" a href="/../admin/index.php">Admin</a>
      			</li>

      	<?php } ?>

    		</ul>
  		</div>
	</nav>
</div>

