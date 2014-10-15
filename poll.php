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
	
		$('#poll_submit').click(function() {
			$.ajax({
				url: 'pollsubmit.php',
				data: {id: "1", vote: $('input:radio[name=favchar]:checked').val()},
				success: function(data) {
					$('#poll_results').html(data);	
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
				<li><a href="../final/poll.php">Poll</a></li>
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

		<div id="poll">
			<h2>Who is your favorite character?</h2>
			<br>
			<input type="radio" name="favchar" value="Sakura Chiyo">
			Sakura Chiyo
			<br>
			<input type="radio" name="favchar" value="Nozaki Umetaro">
			Nozaki Umetaro
			<br>
			<input type="radio" name="favchar" value="Mikoshiba Mikoto">
			Mikoshiba Mikoto
			<br>
			<input type="radio" name="favchar" value="Yuzuki Seo">
			Yuzuki Seo
			<br>
			<input type="radio" name="favchar" value="Kashima Yuu">
			Kashima Yuu
			<br>
			<input type="radio" name="favchar" value="Hori Masayuki">
			Hori Masayuki
			<br>
			<input type="radio" name="favchar" value="Wakamatsu Hirotaka">
			Wakamatsu Hirotaka
			<br>
			<input id="poll_submit" type="submit" class="btn btn-default" value="vote">
			<br>
			<div id="poll_results"></div>
		</div>
		

		<div id="footer">
			©James Wang<br>
			jqw3ha@virginia.edu 
		</div>
	</div>

</body>

</html>

