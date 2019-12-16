 <?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
	if(isset($_GET['q'])){
		$number = (int) $_GET['q'];
	}else{
		header("Location:exam.php");
	}
	$total       = $exm->getTotalRows(); 
	$question = $exm->getQuesByNumber($number );
?>
<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$process = $pro->processData($_POST);
	}
?>
<html>
<body>
<div id="countdown"></div>
<div id="notifier"></div>

<!-- Time Coounter 1 --> 
</body>
</html>


<html>
<head>

</head>
	<body>
		<div class="container">
		<marquee>Your Exam is Running</marquee>
		</div>
	</body>
</html>
<div class="container" >
<h3>Question <?php echo $question['quesNo']; ?> of <?php echo $total; ?></h3>
	<div class="container" >
		<form method="post" action="">
		
		<table> 
			<tr>
				<td colspan="2" style="border: thin solid black; padding: 50px;" >
				 <h7>Que <?php echo $question['quesNo']; ?>: <?php echo $question['ques']; ?></h7>
				</td>
			</tr>
		</table>
			<?php 
				$answer = $exm->getAnswer($number);   
				if($answer){
					while($result = $answer->fetch_assoc()){
			?>
		<table >
			<tr >
				<td style=" padding: 20px;">
				 <input type="radio" name="ans" id="ans" value="<?php echo $result['id']; ?>"/><?php echo $result['ans']; ?>
				</td>
			</tr>
				<?php } } ?>
		</table>

		<!--
			<table >	
			<tr>
			  <td>
				<input type="submit" name="submit" value="Next Question"/>
		-->
				<!-- Time Counter 2-->
		
		<!--		
				<input type="hidden" name="number" value= "<?php echo $number; ?>"/>
			</td>
			</tr>
			
		</table>
		-->

<?php 
	$answer = $exm->getAnswer($number);   
		if($answer){
			while($result = $answer->fetch_assoc()){
				if($result['rightAns'] == '1'){
					$correctAnsID = $result['id']; 

					}
				} 
			} 
?>


		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  		Sumbit
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">

					<script>
					    $(document).ready(function(){
					        $("input[type='radio']").click(function(){
					            var radioValue = $("input[name='ans']:checked").val();
					            if(radioValue == <?php echo($correctAnsID) ?>){
					                document.getElementById("exampleModalLongTitle").innerHTML = "Correct";
					            } else {
					            	document.getElementById("exampleModalLongTitle").innerHTML = "Incorrect";		
					            }
					        });
					    });
					</script>		        


		    	</h5>
		        
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<?php 
					$answer = $exm->getAnswer($number);   
					if($answer){
						while($result = $answer->fetch_assoc()){
							if($result['rightAns'] == '1'){
								echo $result['ans'];
							}
						} 
					} 
				?>
		      </div>
		      <div class="modal-footer">
		        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
		        <button type="submit" name="submit" class="btn btn-primary">Next</button>
		        <input type="hidden" name="number" value= "<?php echo $number; ?>"/>
		      </div>
		    </div>
		  </div>
		</div>
	
	 	</form>
	</div>
 </div>



<!-- Time Counter 1
<script type="text/javascript">
(function () {
  function display( notifier, str ) {
    document.getElementById(notifier).innerHTML = str;
  }
 
  function toMinuteAndSecond( x ) {
    return Math.floor(x/60) + ":" + (x=x%60 < 10 ? 0 : x);
  }
 
  function setTimer( remain, actions ) {
    var action;
    (function countdown() {
       display("countdown", toMinuteAndSecond(remain));
       if (action = actions[remain]) {
         action();
       }
       if (remain > 0) {
         remain -= 1;
         setTimeout(arguments.callee, 1000);
       }
    })(); // End countdown
  }
 
  setTimer(60, {
    10: function () { display("notifier", "Just 10 seconds to go"); },
     5: function () { display("notifier", "5 seconds left");        },
     0: function () { display("notifier", "Time is up baby");       }
  });
})();
 
</script>
-->

<!-- Time Coounter 2
					<?php
				if(($question['quesNo']+1)<=$total)
				  {
				?>
				
				<script>
				setTimeout(function() {
					window.location.href = "test.php?q=<?php echo $question['quesNo']+1; ?>";
					
					}, 60000);
				
				</script>	
				
				<?php
				  }
				?>
				<?php
				if(($question['quesNo'])==$total)
				  {
				?>
				
				<script>
				setTimeout(function() {
					window.location.href = "final.php";
					
					}, 60000);
				
				</script>	
				
				<?php
				  }
				?>

-->

<!-- Detect Answer
	<script>
    $(document).ready(function(){
        $("input[type='radio']").click(function(){
            var radioValue = $("input[name='ans']:checked").val();
            if(radioValue == <?php echo($correctAnsID) ?>){
                alert("Selected " + radioValue);
            }
        });
    });
</script>
-->