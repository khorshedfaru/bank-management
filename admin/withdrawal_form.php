<?php
session_start();
if(!isset($_SESSION['auth'])){
	header('Location: login.php');	
}
require_once "../dbconfig.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Widraw</title>
<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/bootstrap/css/custom.style.css" rel="stylesheet">
</head>

<body>
<?php


/* if($_SERVER['REQUEST_METHOD']=='POST'){
	$type = 'Withdrawal';
	$remark = 'Credit';
	extract($_POST);
	$matchAcc = $con->query("SELECT * FROM `all_accounts` WHERE acc_no = '$accNo'");
	if($matchAcc->num_rows == 1){
		$con->query("INSERT INTO transections(`trans_type`, `acc_no`, `amount`, `cheque_no`, `bearer`, `remark`) VALUES('$type', '$accNo', '$wAmount', '$chequeNo', '$bearEr', '$remark')");
		$con->query("UPDATE all_accounts SET balance = balance - $wAmount WHERE(acc_no = '$accNo')");
	}else{
		
		echo "The account No.".$accNo. " does not match.";
		
	}
	
} */
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-globe"></span> Logo</a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php">Admin Home</a>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Accounts<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="all_accounts.php">All Accounts</a></li>
                            <li><a href="create_customer_acc.php">Create Account</a></li>
                            <li><a href="#">Update Account</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transactions <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="diposit_form.php">Diposite</a></li>
                            <li><a href="withdrawal_form.php">Withdraw</a></li>
                            <li><a href="#">Transfer</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Query<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="check_balance.php">Check Balance</a></li>
                            <li><a href="customer_information.php">Customer Info</a></li>
                            <li><a href="accounts_statement.php">Show Statement</a></li>
                            <li><a href="#">View FD form</a></li>
                        </ul>
                    </li>
                        
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="#">Change Password</a></li>
                            <li><a href="#">Exit</a></li>
                            
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="#"></a></li>
                <li>                
                    <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
              
                </li>
              </ul>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="container">
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $type = 'Withdrawal';
    $debit = 000;
    extract($_POST);
    $pickBalance = $con->query("SELECT balance FROM all_accounts WHERE(acc_no = '$accNo')")->fetch_object()->balance;
    $balance = $pickBalance - $wAmount;
    $matchAcc = $con->query("SELECT acc_no FROM `all_accounts` WHERE(acc_no = '$accNo')");
    if($matchAcc->num_rows == 1){

        $transEntry = $con->query("INSERT INTO transections(`trans_type`, `acc_no`, `cheque_no`, `bearer`, `debit`, `credit`, `balance`) VALUES('$type', '$accNo', '$chequeNo', '$bearEr', '$debit', '$wAmount', '$balance')");
        
        $updateAcc = $con->query("UPDATE all_accounts SET balance = balance-$wAmount WHERE(acc_no = '$accNo')");


        if($transEntry && $updateAcc){
			echo "Transection Success";
			}else{
        
        	echo $accNo . " does not matching.";   
        	}
        
        }

    }
    
?>
	<div class="breadcrumb col-md-6 col-md-offset-3 top-scale-hundred">
    	
            <form method="post" id="withDraw">
            <div class="row">
            <legend class="bg-primary text-center">Information for witdraw</legend>
            </div>
            <div class="row">
                <fieldset class="form-group">
                <div class="col-md-4">
                    <label>Acc/No:</label>
                </div>
                <div class="col-md-8">
                     <input type="text" class="form-control" name="accNo" maxlength="11" minlenght="11" required />
                </div>
                </fieldset>
            </div>
            <div class="row">
                <fieldset class="form-group">
                <div class="col-md-4">
                    <label>Amount:</label>
                </div>
                <div class="col-md-8">
                       <input type="text" class="form-control" name="wAmount" required />
                </div>
                </fieldset>
            </div>
            <div class="row">
                <fieldset class="form-group">
                <div class="col-md-4">
                    <label>Checque No:</label>
                </div>
                <div class="col-md-8">
                        <input type="text" class="form-control" name="chequeNo" required />
                </div>
                </fieldset>
            </div>
            <div class="row">
                <fieldset class="form-group">
                <div class="col-md-4">
                    <label>Bearer:</label>
                </div>
                <div class="col-md-8">
                        <input type="text" class="form-control" name="bearEr" required />
                </div>
                </fieldset>
            </div>
            <div class="row">
                <fieldset class="form-group">
                	<div class="col-md-8 col-md-offset-4">
                    <input class="btn btn-lg btn-success btn-block" type="submit" value="Withdraw" />
                    </div>
                </fieldset>
            </div>
            
            </form>
    </div>
</div>
    
<script src="../assets/jquery/jquery.js" type="text/javascript"></script>
<script src="../assets/jquery/jquery.validation.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
    $("#withDraw").validate({
		rules: {
			accNo: {
				required: true
			},
			wAmount: {
				required: true
			},
			chequeNo: {
				required: true
			},
			bearEr: {
				required: true
			}
		},
		messages: {
			accNo: {
				required: "<span class='text-danger' style='font-size: 14px'>Please enter an account number<span>"
			},
			wAmount: {
				required: "<span class='text-danger' style='font-size: 14px'>Please enter an amount<span>"
			},
			chequeNo: {
				required: "<span class='text-danger' style='font-size: 14px'>Please enter check no<span>"
			},
			bearEr: {
				required: "<span class='text-danger' style='font-size: 14px'>Please enter the bearer's name<span>"
			}
		}
		})
});
</script>
<script src="../assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>