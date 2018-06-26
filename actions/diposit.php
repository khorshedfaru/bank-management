<?php
require_once "../dbconfig.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $type = 'Deposit';
    $credit = 000;
    extract($_POST);
    $pickBalance = $con->query("SELECT balance FROM all_accounts WHERE(acc_no = '$accNo')")->fetch_object()->balance;
    $balance = $pickBalance + $dipoAmount;
    $matchAcc = $con->query("SELECT acc_no FROM `all_accounts` WHERE(acc_no = '$accNo')");
    if($matchAcc->num_rows == 1){

        $transEntry = $con->query("INSERT INTO transections(`trans_type`, `acc_no`, `bearer`, `debit`, `credit`, `balance`) VALUES('$type', '$accNo', '$bearEr', '$dipoAmount', '$credit', '$balance')");
        
        $updateAcc = $con->query("UPDATE all_accounts SET balance = balance+$dipoAmount WHERE(acc_no = '$accNo')");


        if($transEntry && $updateAcc){

			echo "Transection Success";
			}else{
        
        	echo $accNo . " does not matching.";   
        	}
        
        }

    }
    
?>