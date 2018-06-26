<?php
require_once "../dbconfig.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
	extract($_POST);
	
	 //$matchAcc = $con->query("SELECT acc_no FROM all_accounts WHERE acc_no='$accNo'");
	 $matchAcc1 = $con->query("SELECT acc_no FROM related_info WHERE acc_no='$accNo'");
	 //$matchAcc2 = $con->query("SELECT acc_no FROM nomini_info WHERE acc_no='$accNo'");
	 
	 if($matchAcc1->num_rows == 0){
	
  		$insertInfo = $con->query("INSERT INTO related_info(`acc_no`, `fathers_name`, `mothers_name`, `nid`, `pre_address`, `per_address`, `post_code`, `religion_id`, `div_id`, `dist_id`, `gender`, `merital_status`, `date_of_birth`, `phone`) VALUES('$accNo', '$father', '$mother', '$NID', '$preAddress', '$perAddress', '$postcode', '$religion', '$division', '$dist', '$sex', '$merital', '$dob', '$phone')");
		if($insertInfo){
			header('Location: ../admin/add_nomini.php');
		}else{
			echo "Failed to insert";
		}
	 }
	
}
?>