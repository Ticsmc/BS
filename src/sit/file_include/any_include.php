<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>zhr - ANY_FILE_INCLUDE</title>
</head>
<body>
<h1>任意文件包含</h1>
<?php
	include "../class/function.class.php";
	$p = new Func("GET","file");
	$p -> con_html();
	if (isset($_REQUEST['submit'])) {
		$file = $_REQUEST['file'];
		include $file;
	}
?>
</body>
</html>
