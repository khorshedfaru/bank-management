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
<title>All accounts</title>
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
							<li><a href="create_customer_acc.php">Creat Account</a></li>
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
<div class="jumbotron">
    <div class="well panel" style="min-height:530px;">
    <div class="page-header text-center bg-info" style="font-size:16px; font-weight:bolder; line-height:40px;"> All accounts </div>
        <div class="panel-body">
        <?php 
        
        $query = $con->query("SELECT * FROM `all_accounts`");
        $query1 = $con->query("SELECT * FROM `related_info`");
        
        if($query->num_rows >= 1 and $query1->num_rows >= 1){
            ?>
            <table class="table table-bordered table-responsive text-center">
            <thead>
                <tr>
                    <th>Acc Number</th>
                    <th>Acc Type</th>
                    <th>Name</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>Balance</th>
                    <th>Photo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            
            <tbody>
        
            <?php
            while($account = $query->fetch_object() and $info = $query1->fetch_object()): 	
            ?>
                
                <tr>
                    <td><?php echo $account->acc_no; ?></td>
                    <td><?php echo $account->acc_type; ?></td>
                    <td><?php echo $account->first_name ." ". $account->last_name ?></td>
                    <td><?php echo $info->fathers_name; ?></td>
                    <td><?php echo $info->mothers_name; ?></td>
                    <td><?php echo $account->balance; ?></td>
                    <td><img src="<?php echo $account->photo; ?>" style="height:50px; width:50px;" alt="image"></td>
                    <td><a href="#" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        
        <?php }else{
        echo "<h1 class='text-center'>No data to show.</h1>";	
        }?>
        </div>
    </div>
</div>

<script src="../assets/jquery/jquery.js" type="text/javascript"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>