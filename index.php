<div class="article_body" id="article_body" name="article_body">
<?php
	require('./tools/php/connector/connector.php');
	
	$query = "SELECT * FROM `shoutbox` ORDER BY entryid DESC LIMIT 5";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$result = $stmt->get_result();
	while($obj = $result->fetch_object()) {
		if ($obj != null || !empty($obj)) {
		
			echo("
			<p style='font-size: 14px;'>
				$obj->text
			</p>
			<table style='width: 100%; font-size: 11px;'>
				<tr>
					<td style='text-align: start;'>
						Von: <a style='font-size: 11px'; href='?".$obj->user."'>".$obj->user."
					</td>
					<td style='text-align: end;'>
						Am: ".$obj->date_time."
					</td>
				</tr>
			</table>
			<hr>
			");
		}
		else {
			echo("<center>Shout-Box is empty</center>");
		}
	}
	if ($_SESSION['besucht'] == 1) {
		echo("<form action='./tools/php/shoutbox/shoutbox.php' method='POST'>
			<input type='text' name='shout' maxlength='500' style='width: 186px;'><button >Senden</button>
		</fomr");
	}
	
	
?>
</div>