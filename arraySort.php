<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>

<?php
	
	$age=array("Ben"=>"37","Joe"=>"43","Peter"=>"35");
	krsort($age);
	print_r($age);
	var_dump($age);
	echo $_SERVER['PHP_SELF'],$_SERVER['GATEWAY_INTERFACE'],$_SERVER['SERVER_ADDR'],$_SERVER['SERVER_NAME'],$_SERVER['SERVER_SOFTWARE'],$_SERVER['SERVER_PROTOCOL'],$_SERVER['REQUEST_METHOD'],$_SERVER['REQUEST_TIME'],$_SERVER['REMOTE_PORT'],$_SERVER['SCRIPT_FILENAME'],$_SERVER['SERVER_PORT'],$_SERVER['SCRIPT_URI'];
	
?>	
	
</body>
</html>