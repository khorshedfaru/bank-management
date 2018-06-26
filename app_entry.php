
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	extract($_POST);
	echo "<br><br><br><br><br><br>";
	echo $firstname. "" . $lastname;
}
?>