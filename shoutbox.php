<?php
	if (!empty($_POST['shout']) || $_POST['shout'] != null) {
		
		session_start();
	
		if (!empty($_SESSION['user-username']) || $_SESSION['user-username'] != null) {
			require('../connector/connector.php');
	
			$text = $_POST['shout'];
			
			$user = $_SESSION['user-username'];
			
			date_default_timezone_set("Europe/Berlin");
			$timestamp = time();
			$datum = date("Y-m-d H:i:s",$timestamp);
			
			echo($text."<br>");
			echo($user."<br>");
			echo($datum."<br>");
			$stmt = $db->prepare("INSERT INTO `shoutbox`(`text`, `user`, `date_time`) VALUES (?,?,?)");
			$stmt->bind_param('sss', $text, $user, $datum);
			$stmt->execute();
			
			mysqli_close($db);
			header("Location: ../");
			exit;
		}
		else {
			header("Location: ../");
			exit;
		}
	}
	else {
		header("Location: ../");
		exit;
	}
?>
