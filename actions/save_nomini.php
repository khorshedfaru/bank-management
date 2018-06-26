<?php
require_once "../dbconfig.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
	extract($_POST);
	$nomPhoto_dir = '../images/nomini/';
	$nPhoto = $nomPhoto_dir.basename($_FILES['nomPhoto']['name']);
	 
		$matchAcc = $con->query("SELECT `acc_no` FROM all_accounts WHERE acc_no='$accNo'");
	 	$matchAcc1 = $con->query("SELECT `acc_no` FROM related_info WHERE acc_no='$accNo'");
	 	$matchAcc2 = $con->query("SELECT `acc_no` FROM nomini_info WHERE acc_no='$accNo'");
	 
	if($matchAcc->num_rows == 1 && $matchAcc1->num_rows == 1 && $matchAcc2->num_rows == 0){
		$savedata = $con->query("INSERT INTO nomini_info( `acc_no`, `name`, `nid`, `relation`, `gender`, `photo`, `phone`) VALUES('$accNo', '$Nname', '$Nnid', '$rel', '$Nsex', '$nPhoto', '$Nphone')");
		if($savedata){
			move_uploaded_file($_FILES["nomPhoto"]["tmp_name"], $nPhoto);
			echo "<script>prompt('Account created successfully!')</script>";
		}else{
		echo "<script>prompt('Failed to save')</script>";
		return false;	 
	 }
	}
}
?>