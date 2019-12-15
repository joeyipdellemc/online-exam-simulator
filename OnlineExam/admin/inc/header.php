<?php 
    include_once ("../lib/Session.php");
	Session::checkAdminSession();
    include_once ("../lib/Database.php");
    include_once ("../helpers/Format.php");
	$db  = new Database();
	$fm  = new Format();
	
?>
<?php
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
  	
 <!-- Origial -->
  	
  	<script type = "text/javascript" src="/jvascrpt/jquery.js"></script>
   	<script type = "text/javascript" src="/jvascrpt/main.js"></script>

<!-- BootStrap 4.1.1 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!--UI CSS -->
	<link rel="stylesheet" href="/css/modern.css"> 


<!--Fontawesome CDN -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>

	<?php
		if(isset($_GET['action']) && $_GET['action'] == 'logout'){
			Session::destroy();
			header("Location:login.php");
			exit();
		}
	?>

<div class="container-fluid"> 
	<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
  		<a class="navbar-brand" href="#">MalfunStudio</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
 		</button>

  		<div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav">

      			<li class="nav-item">
        			<a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      			</li>

      			<li class="nav-item">
        			<a class="nav-link" href="users.php">Manager User<span class="sr-only">(current)</span></a>
      			</li>

      		    <li class="nav-item">
        			<a class="nav-link" href="quesadd.php">Add Question<span class="sr-only">(current)</span></a>
      			</li>

      			<li class="nav-item">
        			<a class="nav-link" href="queslist.php">List Question<span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" a href="?action=logout">Log Out</a>
      			</li>

    		</ul>
  		</div>
	</nav>
</div>

