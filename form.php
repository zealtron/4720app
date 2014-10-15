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
		
		$("#maeno").click(function() {
			$.ajax({
				url: 'getTanuki.php',
				data: {tanuki: $("#tanuki").val()},
				success: function(data){
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
				<li><a href="../final/">Home</a></li>
 				<li><a href="../final/about.html">About</a></li>
				<li><a href="../final/form.php">Tanuki</a></li>
				<li><a href="../final/episodes.php">Episodes</a></li>
				<li><a href="https://festive-cistern-726.appspot.com/">Guestbook</a></li>
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

		<div id="formerino">
			<img src="http://puu.sh/bKl2r/0f2871d52f.png" alt="tanuki" width="600">
			<h2>Tanuki Calculator!</h2>
			<label for="tanuki">Tanuki</label>
			<input type="text" id="tanuki" name="tanuki" placeholder="ex. 3">
			<button type="submit" class="btn btn-default" id="maeno">Go!</button>
		</div>

		<div id="results"></div>
		
		

		<div id="footer">
			©James Wang<br>
			jqw3ha@virginia.edu 
		</div>
	</div>

</body>

</html>

