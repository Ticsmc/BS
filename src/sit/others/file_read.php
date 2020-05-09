<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>zhr - FileRead</title>
</head>
<body>
<h1>任意文件读取</h1>
<?php
	include "../class/function.class.php";
	$p = new Func("GET","filename");
	$p -> con_html();
	if (isset($_REQUEST['submit'])) {
		$filename = $_REQUEST['filename'];
		if (file_exists($filename)) {
			echo htmlspecialchars($p -> con_function('file_get_contents',$filename));
		}else{
			echo "zhr Error: file not exists.";
		}
	}
?>
</body>
</html>