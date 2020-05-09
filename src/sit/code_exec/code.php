<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>zhr - 代码执行</title>
</head>
<body>
<h1>任意代码执行</h1>
<?php
	include "../class/function.class.php";
	$p = new Func("GET","code");
	$p -> con_html();
	if (isset($_REQUEST['submit'])) {
		$code = $_REQUEST['code'];
		echo $p -> con_function('assert',$code);
	}
?>
</body>
</html>
