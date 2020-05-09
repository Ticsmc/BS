<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>zhr - 命令执行</title>
</head>
<body>
<h1>任意命令执行</h1>
<?php
	include "../class/function.class.php";
	$p = new Func("GET","command");
	$p -> con_html();
	if (isset($_REQUEST['submit'])) {
		$command = $_REQUEST['command'];
		echo $p -> con_function('exec',$command);
	}
?>
</body>
</html>
