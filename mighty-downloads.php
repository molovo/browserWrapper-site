<?php
	$file = "downloads.json";
	$json = json_decode(file_get_contents($file), true);
	$json['mighty'] = $json['mighty'] + 1;
	file_put_contents($file, json_encode($json));
	echo 'success';
?>