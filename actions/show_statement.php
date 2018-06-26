<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Query Reust</title>
<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/bootstrap/css/custom.style.css" rel="stylesheet">
</head>

<body>
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
                        <a href="../admin/index.php">Admin Home</a>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Accounts<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="../admin/all_accounts.php">All Accounts</a></li>
                            <li><a href="../admin/create_customer_acc.php">Creat Account</a></li>
                            <li><a href="#">Update Account</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transactions <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="../admin/diposit_form.php">Diposite</a></li>
                            <li><a href="../admin/withdrawal_form.php">Withdraw</a></li>
                            <li><a href="#">Transfer</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Query<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="../admin/check_balance.php">Check Balance</a></li>
                            <li><a href="../admin/customer_information.php">Customer Info</a></li>
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
                    <a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
              
                </li>
              </ul>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class='container' style="min-height:600px;">
<?php

require_once "../dbconfig.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	extract($_POST);
	$getAccNo = $con->query("SELECT acc_no FROM all_accounts WHERE acc_no = '$accNo'");
	echo "<br><br><br><br><br>";
	$AccNo = $getAccNo->fetch_object();

	if($getAccNo->num_rows == 1){
		$results = $con->query("SELECT * FROM all_accounts WHERE acc_no = '$accNo'");
		$result = $results->fetch_object();
		
		$selectTransactions = $con->query("SELECT * FROM transections WHERE acc_no = '$accNo'");
		
 ?>
 <div class="col-md-10 col-md-offset-1" style="border:2px solid #666;">
 	<table class="table table-responsive text-left">
    	<tr>
        	<th>Acc/No</th>
            <td><?php echo $result->acc_no; ?></td>
        </tr>
        <tr>
        	<th>Name</th>
            <td><?php echo $result->first_name . " " . $result->last_name; ?></td>
        </tr>
        <tr>
        	<th>Acc/Type</th>
            <td><?php echo $result->acc_type; ?></td>
        </tr>
        <tr>
        	<th>Opening Balance</th>
            <td><?php echo $result->init_balance; ?></td>
        </tr>
        <tr>
        	<th>Current Balance</th>
            <td><?php echo $result->balance; ?></td>
        </tr>
    </table>
    <?php if($selectTransactions->num_rows > 0 ){ ?>
    <table class="table table-bordered text-center">
    	<thead>
        	<tr>
            	<th class="text-center">Date &amp; Time</th>
                <th class="text-center">Trans_Type</th>
                <th class="text-center">By</th>
                <th class="text-center">Debit</th>
                <th class="text-center">Credit</th>
                <th class="text-center">Balance</th>
            </tr>
        </thead>
        <tbody>
        	<?php while($transaction = $selectTransactions->fetch_object()): ?>
        	<tr>
            	<td><?php echo $transaction->trans_date; ?></td>
                <td><?php echo $transaction->trans_type; ?></td>
                <td><?php echo $transaction->bearer; ?></td>
                <td><?php echo $transaction->debit; ?></td>
                <td><?php echo $transaction->credit; ?></td>
                <td><?php echo $transaction->balance; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <?php }else{ ?>
    	<h3 class="text-center text-danger" style="border:1px solid #333; padding:10px;">No transaction made</h3>
    <?php } ?>
    <div class="row" style="margin-top:100px; margin-bottom:35px;">
    	<div class="col-md-4 text-center">
        	<h5>Issued By</h5>
        </div>
        <div class="col-md-4 text-center">
        	<h5>Brance Manager</h5>
        </div>
        <div class="col-md-4 text-center">
        	<h5>Cashier</h5>
        </div>
    </div>
 
 </div>
 
 <?php }else{ 
 ?>
 <div class="col-md-10 col-md-offset-1">
 	<h2 class="text-center">Acc no does not match</h2>
 </div> 
 <?php 
 }

} 

?>
</div>
<footer class='modal-footer bg-dark'>

	<div class='row'>
    	<div class='col-md-8 col-md-offset-2'>
        	<h4 class='text-center'>&copy; ALl right reserved 2018</h4>
        </div>
    </div>

</footer>
<script src="../assets/jquery/jquery.js" type="text/javascript"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>