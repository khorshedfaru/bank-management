<?php
require_once "../dbconfig.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
	$custPhoto_dir = '../images/customer/';
	$custPhoto = $custPhoto_dir.basename($_FILES['custPhoto']['name']);
	extract($_POST);
	$matchAcc = $con->query("SELECT * FROM all_accounts WHERE acc_no='$accNo'");
	if($matchAcc->num_rows == 0){
		$insertAcc = $con->query("INSERT INTO all_accounts(`acc_no`, `acc_type`, `balance`, `brance_id`, `first_name`, `last_name`, `init_balance`, `photo`) VALUES('$accNo', '$accType', '$intBal', '$branceId', '$fname', '$lname', '$intBal', '$custPhoto')");
		
		if($insertAcc){
			$moveFile = move_uploaded_file($_FILES["custPhoto"]["tmp_name"], $custPhoto);
			header('Location: ../admin/cust_info_form.php');
		}else{
			echo "Failed";	
		}
		
	 }
}
?>