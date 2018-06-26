<?php
session_start();
if(!isset($_SESSION['auth'])){
	header('Location: login.php');	
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Panel</title>
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
    <div class="container-fluid top-scale-hundred">
        <h3 class="text-center">Welcome to admin panel!</h3>
        <div class="panel col-md-3 text-warning">
            <div class="panel-title bg-info text-capitalize text-center">
                <p style="font-weight:bolder; font-size:24px;">Loans</p>
            </div>
            
            <ul class="panel-body bg-primary text-center">
                <li class="btn-block btn-lg btn-default"><a href="loan_issue_form.php">Issue a loan</a></li>
                <li class="btn-block btn-lg btn-default">Pay Installment</li>
                <li class="btn-block btn-lg btn-default">Check Installments</li>
                <li class="btn-block btn-lg btn-default"><a href="../loan_calculator.php">Calculate</a></li>
            </ul>
            
        </div>
    </div>
    <footer class="modal-footer bg-dark">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h4 class="text-center">&copy; ALl right reserved 2018</h4>
        </div>
    </div>

</footer>
    <script src="../assets/jquery/jquery.js" type="text/javascript"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>