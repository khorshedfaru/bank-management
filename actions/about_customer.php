<?php
require_once "../dbconfig.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	extract($_POST);
	$results = $con->query("SELECT * FROM all_accounts WHERE acc_no ='$accNo'");
	$inforMations = $con->query("SELECT * FROM related_info WHERE acc_no ='$accNo'");
?>
<?php	
	if($results->num_rows == 1 && $inforMations->num_rows == 1){
		$result = $results->fetch_object();
		$inforMation =  $inforMations->fetch_object(); 
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
<div class="container">

<div class="col-md-6 col-md-offset-3 top-scale-hundred">
	<table class="table table-responsive table-bordered">
    	<h3 class="text-center">Result</h3>
        <tr>
        	<th>Account number</th>
            <td><?php echo $result->acc_no; ?></td>
        </tr>
        <tr>
        	<th>Name</th>
            <td><?php echo $result->first_name." ".$result->last_name; ?></td>
        </tr>
        <tr>
        	<th>Father"s name</th>
            <td><?php echo $inforMation->fathers_name; ?></td>
        </tr>
        <tr>
        	<th>Mother"s name</th>
            <td><?php echo $inforMation->mothers_name; ?></td>
        </tr>
        <tr>
        	<th>National ID</th>
            <td><?php echo $inforMation->nid; ?></td>
        </tr>
        <tr>
        	<th>Initial Balance</th>
            <td><?php echo $result->init_balance; ?></td>
        </tr>
    </table>
</div>
<?php
	}else{
?>
<div class="col-md-6 col-md-offset-3 top-scale-hundred">
	<h2>Account Does not match</h2>
</div>
<?php
 }

}

?>
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