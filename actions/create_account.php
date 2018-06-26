<?php
require_once "../dbconfig.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
	
	//Defining account holder's Photo directory
	$custPhoto_dir = '../images/customer/';
	$custPhoto = $custPhoto_dir.basename($_FILES['custPhoto']['name']);
	extract($_POST);
	//Defining account holder's Photo directory
	
	//Maching start
	$matchAcc = $con->query("SELECT acc_no FROM all_accounts WHERE acc_no='$accNo'");
	$matchInfo = $con->query("SELECT acc_no FROM related_info WHERE acc_no='$accNo'");
	$matchNomini = $con->query("SELECT acc_no FROM nomini_info WHERE acc_no='$accNo'");
	//Matching End
	
	//Disabling Autocommit
	$con->autocommit(FALSE);
	//Disabling Autocommit
	
	//Query Start
	if($matchAcc->num_rows == 0 && $matchInfo->num_rows == 0 && $matchNomini->num_rows == 0){
		$insertAcc = $con->query("INSERT INTO all_accounts(`acc_no`, `acc_type`, `balance`, `brance_id`, `first_name`, `last_name`, `init_balance`, `photo`) VALUES('$accNo', '$accType', '$intBal', '$branceId', '$fname', '$lname', '$intBal', '$custPhoto')");
		$insertInfo = $con->query("INSERT INTO related_info(`acc_no`, `fathers_name`, `mothers_name`, `nid`, `pre_address`, `per_address`, `post_code`, `religion_id`, `div_id`, `dist_id`, `gender`, `merital_status`, `date_of_birth`, `phone`) VALUES('$accNo', '$father', '$mother', '$NID', '$preAddress', '$perAddress', '$postcode', '$religion', '$division', '$dist', '$sex', '$merital', '$dob', '$phone')");

$con->commit();

$con->rollback();

$con->close();

		if($insertAcc && $insertInfo){
			$moveFile = move_uploaded_file($_FILES["custPhoto"]["tmp_name"], $custPhoto);
			header('Location: ../admin/add_nomini.php');
		}else{
			echo "Failed";	
		}
		
	 }

}
?>
