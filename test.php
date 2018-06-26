<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	extract($_POST);
	echo "<br><br><br><br><br><br>";
	print_r($_FILES);
}
?>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="photo">
    <input type="submit" value="Submit">
</form>
</body>
</html>