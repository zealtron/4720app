<?php	
					
	function lookupEpisode($episode) {
		$db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720jqw3ha', 'jj988374', 'cs4720jqw3ha');
		if(mysqli_connect_errno()) {
			echo "Connection Error!";
			return;
		}
		
		$stmt = $db_connection->stmt_init();
		if($stmt->prepare("select epNum, Title, Aired, Description from Episodes where epNum = ?")) {
			$stmt->bind_param("s", $episode);
			$stmt->execute();
			$stmt->bind_result($epNum, $title, $aired, $description);
			while($stmt->fetch()){
				echo("<p>Episode " . $epNum . "</p>\n");
				echo("<p>" . $title . "</p>\n");
				echo("<p>" . $aired . "</p>\n");
				echo("<p>" . $description . "</p>\n");
			}
		} 
	}

	$episodePassedIn = $_GET["episodeNum"];
	
	lookupEpisode($episodePassedIn);
			
?>
