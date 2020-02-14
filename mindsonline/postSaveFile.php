<?php
	$saveFile = './saveFile.txt';
	$saveData = file_get_contents($saveFile);
	$incomingData = $_POST["saveDataKey"];
	file_put_contents($saveFile, $incomingData);
	echo "Data uploaded successfully";
?>