<?php	

	function vote($vote) {
		$db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720jqw3ha', 'jj988374', 'cs4720jqw3ha');
		if(mysqli_connect_errno()) {
			echo "Connection Error!";
			return;
		}

		$stmt = $db_connection->stmt_init();
		if($stmt->prepare("update Poll set Votes = Votes + 1 where Name = ?")) {
			$stmt->bind_param("s", $vote);
			$stmt->execute();
		}

		if($stmt->prepare("select Name, Votes from Poll")) {
			$stmt->execute();
			$stmt->bind_result($name, $votes);
			while($stmt->fetch()){
				echo("<p>" . $name . " " . $votes . " votes</p>\n");
			}
		}
	}

	$id = $_GET['id'];		
	$vote = $_GET['vote'];
	echo "<br><p>Results<p>";
	vote($vote);

			
?>
