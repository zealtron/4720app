<?php	
					
	function lookupComment() {
		$db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720jqw3ha', 'jj988374', 'cs4720jqw3ha');
		if(mysqli_connect_errno()) {
			echo "Connection Error!";
			return;
		}
		
		$stmt = $db_connection->stmt_init();
		if($stmt->prepare("select comment")) {
			$stmt->execute();
			$stmt->bind_result($comment);
			while($stmt->fetch()){
				echo("<p>Anonymous Posted:  " . $comment . "</p>\n");
			}
		} 
	}

	lookupComment();
			
?>
