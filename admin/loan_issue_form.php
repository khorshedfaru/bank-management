<?php
session_start();
if(!isset($_SESSION['auth'])){
	header('Location: login.php');	
}
 require_once '../dbconfig.php';
 $query = $con->query("SELECT * FROM loan_policies");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Customer Information</title>
<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/bootstrap/css/custom.style.css" rel="stylesheet">
</head>

<body>
<header>
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
                                <li><a href='accounts_statement.php'>Show Statement</a></li>
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
</header>
<body>
    <?php
    	if($_SERVER['REQUEST_METHOD'] == 'POST'){
			extract($_POST);
			$accMatch = $con->query("SELECT * FROM loan_account WHERE(loan_acc_no = '$loanAccNo')");
			print_r($accMatch);
			//validation Start
			
		/*	if (!preg_match('/^[0-9]*$/', $loanAccNo)) {
       			echo "<div class='err col-sm-6 col-sm-offset-3'>Account no must be numeric.</div>";
				return false;
			}
			
			if (!preg_match('/^[A-z]*$/', $loanTo) || !preg_match('/^[A-z]*$/', $fname) || !preg_match('/^[A-z]*$/', $mname)) {
       			echo "<div class='err col-sm-6 col-sm-offset-3'>Names must be Alphabetic.</div>";
				return false;
    		} 
			if (!preg_match('/^[0-9]*$/', $amount)) {
       			echo "<div class='err col-sm-6 col-sm-offset-3'>Invalid Loan amount.</div>";
				return false;
    		}
			if (!preg_match('/^[0-9]*$/', $duration)) {
       			echo "<div class='err col-sm-6 col-sm-offset-3'>Duration is invalid.</div>";
				return false;
    		}
			if (!preg_match('/^[0-9]*$/', $nid)) {
       			echo "<div class='err col-sm-6 col-sm-offset-3'>Invalid NID number.</div>";
				return false;
    		}
			if (!preg_match('/^[0-9]*$/', $refAcc)) {
       			echo "<div class='err col-sm-6 col-sm-offset-3'>Invalid reference acc no.</div>";
				return false;
    		}
			if (!preg_match('/^[0-9]*$/', $roi) and $roi > 40 ) {
       			echo "<div class='err col-sm-6 col-sm-offset-3'>Invalid reference acc no.</div>";
				return false;
    		}
			 */
			 
			 // PHP validation end
			 
			 
			if($accMatch->num_rows == 0){
				$insert= $con->query("INSERT INTO loan_account(`loan_acc_no`, `name`, `fathers_name`, `mothers_name`, `loan_policy`, `loan_amount`, `duration`, `nid`, `address`, `ref_acc`, `phone`) VALUES('$loanAccNo', '$loanTo', '$fname', '$mname', '$policy', '$amount', '$duration', '$nid', '$addr', '$refAcc', '$phone')");
			}
		}	

 	?>
<div class="jumbotron">
	<div class="col-md-10 col-md-offset-1 breadcrumb">
		<form method="post" name="loanForm" enctype="multiipart/form-data">
			<div class="row">
				<legend class="bg-primary text-center">Loan Issue Form</legend>
			</div>
			<div class="row">
				<div class="col-md-6">
					<fieldset class="form-group">
						<div class="col-md-4">
							<label>Loan Ac/No:</label>
						</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="loanAccNo" minlength="11" maxlength="11" required /><span id="accErr" style="color:#F00;"></span>
						</div>
					</fieldset>
				</div>
				<div class="col-md-6">
					<fieldset class="form-group">
						<div class="col-md-4">
						<label>Issuing To:</label>
						</div>
						<div class="col-md-8">
			            <input class="form-control" type="text" name="loanTo" required /><span id="nameErr" style="color:#F00;"></span>
			        </div>
					</fieldset>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<fieldset class="form-group">
						<div class="col-md-4">
						<label>Father's Name:</label>
						</div>
						<div class="col-md-8">
		                <input class="form-control" type="text" name="fname" required /><span id="fnameErr" style="color:#F00;"></span>
		            </div>
					</fieldset>
				</div>
				<div class="col-md-6">
					<fieldset class="form-group">
						<div class="col-md-4">
						<label>Mother's Name:</label>
						</div>
						<div class="col-md-8">
		                <input class="form-control" type="text" name="mname" required /><span id="mnameErr" style="color:#F00;"></span>
		            </div>
					</fieldset>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<fieldset class="form-group">
						<div class="col-md-4">
						<label>Loan Policy:</label>
						</div>
						<div class="col-md-8">
		            	<select class="form-control" name="policy" required />
		            		<option>Select One</option>
		                    <?php while($result = $query->fetch_object()): ?>
		                    <option value="<?php echo $result->policy_name; ?>"><?php echo $result->policy_name; ?></option>
		                    <?php endwhile; ?>
		                </select><span id="polyErr" style="color:#F00;"></span>
		            </div>
		            	
					</fieldset>
				</div>
				<div class="col-md-6">
					<fieldset class="form-group">
						<div class="col-md-4">
							<label>Loan Amount:</label>
						</div>
						<div class="col-md-8">
		                <input class="form-control" type="text" name="amount" required /><span id="amtErr" style="color:#F00;"></span>
		            </div>
					</fieldset>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<fieldset class="form-group">
						<div class="col-md-4">
						<label>Duration:</label>
						</div>
						<div class="col-md-8">
						<input class="form-control" type="text" name="duration" required /><span id="duErr" style="color:#F00;"></span>
					</div>
					</fieldset>
				</div>
				<div class="col-md-6">
					<fieldset class="form-group">
						<div class="col-md-4">
						<label>NID:</label>
						</div>
						<div class="col-md-8">
		                <input class="form-control" type="text" name="nid" minlength="13" maxlength="17" required /><span id="nidErr" style="color:#F00;"></span>
		            </div>
					</fieldset>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<fieldset class="form-group">
						<div class="col-md-4">
						<label>Reference Acc/No:</label>
						</div>
						<div class="col-md-8">
		                <input class="form-control" type="text" name="refAcc" maxlength="11" required /><span id="refErr" style="color:#F00;"></span>
		            </div>
					</fieldset>
				</div>
				<div class="col-md-6">
					<fieldset class="form-group">
						<div class="col-md-4">
						<label>Phone:</label>
						</div>
						<div class="col-md-8">
						<input class="form-control" type="text" name="phone" maxlength="11" required /><span id="phoneErr" style="color:#F00;"></span>
					</div>
					</fieldset>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">		<fieldset class="form-group">
						<div class="col-md-4">
                    	<label>Address:</label>
                		</div>
                		<div class="col-md-8">
		                <textarea class="form-control" rows="4" name="addr" required /></textarea><span id="addrErr" style="color:#F00;"></span>
		            </div>
					</fieldset>
				</div>
				<div class="col-md-6">
					<fieldset class="form-group">
						<div class="col-md-4">
						<label>Photo:</label>
						</div>
						<div class="col-md-8">
		                <input class="" type="file" name="photo" />
		            </div>
					</fieldset>
				</div>
			</div>
            <div class="col-md-6 col-md-offset-3">
				<fieldset class="form-group">
					<input class="btn-lg btn-success btn-block" type="submit" onClick="return validate()" name="submit" value="Submit">
	            	<!-- <button class="form-control btn btn-success" type="button" onClick="validate()" name="submit">Submit</button> -->
	        	</fieldset>
           	</div>
		</form>
	</div>
</div>
<script src="../assets/jquery/jquery.js" type="text/javascript"></script>
<script src="../assets/jquery/jquery.validation.js" type="text/javascript"></script>
<script src="../assets/jquery/loan.validation.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>