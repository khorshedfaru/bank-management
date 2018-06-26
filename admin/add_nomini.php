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
<title>Creat Account</title>
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
<div class="jumbotron">
<div class="col-md-6 col-md-offset-3" id="Customer-info">
<form name="addNom" method="post" id="addNom" action="../actions/save_nomini.php" enctype="multipart/form-data">
<fieldset>
        <legend class="text-center bg-primary">Nomini's Information</legend>
        	<div class="row">
            <div class="col-md-6 col-md-offset-3">
                    <label class="center-block text-center text-uppercase text-danger">Acount Number</label>
                    <input type="text" class="form-control" name="accNo"  id="accNo" minlength="11" maxlength="11" required />
            </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Nomini's name:</label><br>
                    <input type="text" class="form-control" name="Nname" id="nomName" required />
                </div>
                <div class="col-md-6">
                    <label>Relation:</label><br>
                    <select class="form-control" name="rel" required />
                        <option hidden="">Select One</option>
                        <option value="Father">Father</option>
                        <option value="Mother">Mother</option>
                        <option value="Sister">Sister</option>
                        <option value="Brother">Brother</option>
                        <option value="Wife">Wife</option>
                        <option value="Houseband">Houseband</option>
                        <option value="Other">Other</option>
                    </select>
               </div>
             </div>
             <div class="row">
             	<div class="col-md-6">
                    <label>Phone:</label><br>
                    <input type="text" class="form-control" name="phone" minlength="11" maxlength="11" id="Nphone" required />
               </div>
                <div class="col-md-6">
                    <label>NID:</label><br>
                    <input type="text" class="form-control" name="Nnid" minlength="13" maxlength="17" id="nomNid" required />
               </div>
               
           </div>
           
          <div class="row">
               <div class="col-md-6">
                    <label>Gender:</label><br>
                    <input type="radio" name="Nsex" value="Male" required /><span>Male</span>
                    <input type="radio" name="Nsex" value="Female" required /><span>Female</span>
               </div>
               <div class="col-md-6">
                    <label>Nomini's  Photo:</label><br>
                    <input type="file" name="nomPhoto" accept="image/jpeg, image/png, image/jpg" required/>
               </div>
           </div>
            
    </fieldset>
    <fieldset class="form-group">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <input class="btn-lg btn-block btn-success" type="submit" name="submit" value="Save" />
        </div>
    </div>
    </fieldset>
</form>
</div>
    
</div>
<script src="../assets/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="../assets/jquery/jquery.js" type="text/javascript"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/jquery/jquery.validation.js"></script>
<script src="../assets/jquery/additional-methods.min.js" type="text/javascript"></script>
<script src="../assets/jquery/nom_form_validation.js" type="text/javascript"></script>
</body>
</html>