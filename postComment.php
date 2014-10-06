<?php	
					
	function postComment($comment) {
		$db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720jqw3ha', 'jj988374', 'cs4720jqw3ha');
		if(mysqli_connect_errno()) {
			echo "Connection Error!";
			return;
		}
		
		$stmt = $db_connection->stmt_init();
		if($stmt->prepare("insert into Comments (comment) values (?)")) {
			$stmt->bind_param("s", $comment);
			$stmt->execute();
		}
		if($stmt->prepare("select comment from Comments")) {
			$stmt->execute();
			$stmt->bind_result($comments);
			while($stmt->fetch()){
				echo("<p>Anonymous Posted:  " . $comments . "</p>\n");
			}
		}
		
	}
	
	$comment = $_GET["comment"];
	postComment($comment);
			
?>
