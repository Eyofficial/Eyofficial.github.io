<?php
	$headers = array();
	$context = stream_context_create(array('http' => array('header' => $headers)));
	$url = $_GET["URL"];
	$content = file_get_contents($url, false, $context);
	echo $content;
?>
