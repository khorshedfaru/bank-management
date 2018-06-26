<?php
require_once "dbconfig.php";

$pols = $con->query("SELECT * FROM loan_policies");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>create Account</title>
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/bootstrap/css/custom.style.css" rel="stylesheet">
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
                        <a href="admin/index.php">Admin Home</a>
                    </li>
                    
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Accounts<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="about-us">
							<li><a href="admin/all_accounts.php">All Accounts</a></li>
							<li><a href="admin/create_customer_acc.php">Create Account</a></li>
							<li><a href="#">Update Account</a></li>
						</ul>
					</li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transactions <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="admin/diposit_form.php">Diposite</a></li>
                            <li><a href="admin/withdrawal_form.php">Withdraw</a></li>
                            <li><a href="#">Transfer</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Query<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="admin/check_balance.php">Check Balance</a></li>
                            <li><a href="admin/customer_information.php">Customer Info</a></li>
                            <li><a href='admin/accounts_statement.php'>Show Statement</a></li>
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
<div class="jumbotron">

    <div class="well panel col-md-6 col-md-offset-3">
    <div class="page-header bg-dark text-center" style="line-height:50px; font-size:16px; font-weight:bolder;">Calculate the amount of Installment</div>
    <div class="panel-body">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
	/*
	* $P = Principal or Amount of loan
	* $r = rate of Interest
	* $n = Number of Payment
	* $i = Rate of interest per month
  	* $cR = capitalization Rate
	* $cRn  = Capitalization rate for total payment
	* $IA = Installment Amount
	*/
	extract($_POST);
	$P = $amount;
	$r = $rate/100;
	$i = $r/$m;
	$n = $year * $m;
	
	$cR = 1+$i;
	$cRn = pow($cR, $n);
	$cRn1 = $i*$cRn;
	$cRn2 = $cRn-1;
	$cRn3 = $cRn1/$cRn2;
	  
	$PMT = $P * $cRn3;
	 if($PMT != NULL){ ?>
    <div class="tab-content bg-info" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; padding:10px; margin-bottom:15px;"><?php echo "<strong>Installment Amount:</strong> tk.".$PMT; ?></div>
    <?php }
	}?>
<form method="post">
    	<div class="row">
    	<fieldset class="form-group">
        	<div class="col-md-4">
            	<label>Loan Amount:</label>
            </div>
            <div class="col-md-8">
            	<input type="text" name="amount" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-4">
            	<label>Loan Policy:</label>
            </div>
            <div class="col-md-8">
            	<select name="lop" id="pol">
 					<option>Select One</option>
                    <?php while($pol = $pols->fetch_object()): ?>
 					<option value="<?php echo $pol->policy_name; ?>"><?php echo $pol->policy_name; ?></option>
                    <?php endwhile; ?>
                    </select>
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-4">
            	<label>Rate(i):</label>
            </div>
            <div class="col-md-8">
            <?php //if(isset($pol)): ?>
            	<input type="text" name="rate" value="<?php //echo $pol->int_rate; ?>" class="form-control">
            <?php //endif; ?>
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-4">
            	<label>Installment Type:</label>
            </div>
            <div class="col-md-8">
            	<select name="m">
 					<option>Select One</option>
 					<option value="12">Monthly</option>
                    <option value="4">Quarterly</option>
                    <option value="2">Half Yearly</option>
                    <option value="1">Yearly</option>
 				</select>
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-4">
            	<label>Duration:</label>
            </div>
            <div class="col-md-8">
            	<input type="text" name="year" class="form-control">
            </div>
        </fieldset>
        </div>
 <input class="col-md-8 col-md-offset-2 btn btn-lg btn-success" type="submit" name="submit" value="Calculate">
</form>
	</div>
    </div>
</div>
<script src="assets/jquery/jquery.js" type="text/javascript"></script>
<script>
/* $(document).ready(function(){
    $("#pol").select(function(){
        $.getJSON("policies.php", function(){
        	$("div").append(field + " ");
        });
    });
}); 
*/
</script>
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>