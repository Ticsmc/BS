<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> 存储XSS</title>
</head>
<body>
<h1>XSS 存储型</h1>
<?php
	include "../class/function.class.php";
	$p = new Func("POST","name");
	$p -> con_html();
	if (isset($_REQUEST['submit'])) {
		$name = $_REQUEST['name'];
		echo $p -> con_function('file_put_contents',__FILE__,$name,FILE_APPEND);
	}
?>
</body>
</html>
