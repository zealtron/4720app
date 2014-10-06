<!DOCTYPE html>

<html>
<head>
	<title>Gekkan Shoujo Nozaki-kun!</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="mystyle.css">
	<link rel="shortcut icon" href="icon.ico">
	<!-- Latest compiled and minified CSS--> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<!--Optional theme 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/jumbotron-narrow.min.css"

	 Latest compiled and minified JavaScript 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
	<script>
	$(document).ready(function() {	
		$("#fonts").change(function() {
			$('.changeme').css("font-family", $(this).val());
		});	
		
		$('#post').click(function() {
			$.ajax({
				url: 'postComment.php',
				data: {comment: $('#comment').val()},
				success: function(data) {
					$('#results').html(data);
				}
			});
		});		
	
				
	});
	</script>	
</head>

<body>
	<div id="container" class="changeme">  
		<div id="header">
			<h1>
				Gekkan Shoujo Nozaki-kun
			</h1>
		</div>

		<div id="tabs">
			<ul class="nav">
				<li><a href="../ms4/index.html">Home</a></li>
 				<li><a href="../ms4/about.html">About</a></li>
				<li><a href="../ms4/form.php">Tanuki</a></li>
				<li><a href="../ms4/episodes.php">Episodes</a></li>
				<li><a href="../ms4/comments.php">Guestbook</a></li>
				<li><a href="#">Poll</a></li>	
				<li><select id="fonts">
					<option value="Comic Sans MS">Comic Sans</option>
					<option value="Arial">Arial</option>
					<option value="Verdana">Verdana</option>
					<option value="Courier New">Courier New</option>
					<option value="Tahoma">Tahoma</option>
					<option value="Impact">Impact</option>
				</select></li>
			</ul>
		</div>
		<div id="comments">
			<h2>Questions, Comments, Concerns!</h2><br>
			<label for="comment">Comment</label>
			<input type="text" id="comment" name="comment" placeholder="ex. Hello World!">
			<button type="submit" class="btn btn-default" id="post">Post</button>
		</div>	
		<div id="results">
		<?php	
					
		function lookupComment() {
			$db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720jqw3ha', 'jj988374', 'cs4720jqw3ha');
			if(mysqli_connect_errno()) {
				echo "Connection Error!";
				return;
			}
		
			$stmt = $db_connection->stmt_init();
			if($stmt->prepare("select comment from Comments")) {
				$stmt->execute();
				$stmt->bind_result($comment);
				while($stmt->fetch()){
					echo("<p>Anonymous Posted:  " . $comment . " ");
				}
			}	 
		}

		lookupComment();
			
		?>	
		</div>

		<div id="footer">
			©James Wang<br>
			jqw3ha@virginia.edu 
		</div>
	</div>

</body>

</html>

