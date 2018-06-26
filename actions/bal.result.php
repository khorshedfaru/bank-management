<?php
require_once "../dbconfig.php";

?>
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
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	extract($_POST);
	$results = $con->query("SELECT acc_no, balance FROM all_accounts WHERE acc_no ='$accNo'");	
	if($results->num_rows == 1){
		$result = $results->fetch_object();
?>
<div class="container">
<div class="col-md-6 col-md-offset-3 top-scale-hundred">
	<table class="table table-responsive table-bordered">
    	<caption class="text-center">Balance Statement</caption>
        <tr>
        	<th>Account number</th>
            <td><?php echo $result->acc_no; ?></td>
        </tr>
        <tr>
        	<th>Account Balance</th>
            <td><?php echo "Tk.".$result->balance; ?></td>
        </tr>
    </table>
</div>
</div>

<?php
 }else{
?>
<div class="jumbotron">

    <div class="row">
        <div class="col-md-8  col-md-offset-2 top-scale-hundred">
            <h2 class="text-center">Account number does not match</h2>
            <div class="col-md-4 col-md-offset-4 top-scale-hundred">
                <a href="#" class="btn btn-info text-center">Please try with a valid Account number</a>
            </div>
        </div> 
    </div>
</div>
<?php
 }

}

?>
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