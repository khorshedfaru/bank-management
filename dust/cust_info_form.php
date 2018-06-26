<?php 
/* session_start();
if(!isset($_SESSION['auth'])){
	header('Location: login.php');	
}
*/
require_once "../dbconfig.php";

require_once 'queries.php';

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
							<li><a href="creat_customer_acc.php">Creat Account</a></li>
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
<form name="custInfo" method="post" id="custInfo" action="../actions/cust_info_entry.php">
<fieldset class="form-group">
        <legend class="text-center bg-primary">Customer Information</legend>
        <div class="row">
        	<div class="col-md-6 col-md-offset-3">
                <label class="center-block text-center text-uppercase text-danger">Account Number</label>
                <input type="text" class="form-control" name="accNo" id="accNo" required />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Father's name:</label><br>
                <input type="text" class="form-control" name="father" id="faTher" required />
            </div>
            <div class="col-md-6">
                <label>Mother's name:</label><br>
                <input type="text" class="form-control" name="mother" id="moTher" required />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>NID Number:</label><br>
                <input type="text" class="form-control" name="NID" id="nId" minlength="13" maxlength="17" required />
            </div>
            <div class="col-md-6">
                <label>Phone number:</label><br>
                <input type="text" class="form-control" name="phone" id="phone" minlength="11" maxlength="11" required />
            </div>
        </div>
          <div class="row">
            <div class="col-md-6">
                <label>Postcode:</label><br>
                <input  type="text" class="form-control" name="postcode" id="pCode" minlength="4" maxlength="4" required />
            </div>
            <div class="col-md-6">
                <label>Religion:</label><br>
                    <select name="religion" class="form-control" required >
                        <option value="">Select Religion</option>
                        <?php while($religion = $religions->fetch_object()){ ?>
                        <option value="<?php echo $religion->id; ?>"><?php echo $religion->religion_name; ?></option>
                        <?php } ?>
                    </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <label>Division:</label><br>
                    <select name="division" class="form-control" required >
                        <option value="">Select Division</option>
                        <?php while($division = $divisions->fetch_object()){ ?>
                        <option value="<?php echo $division->id; ?>"><?php echo $division->name; ?></option>
                        <?php } ?>
                    </select>
                
            </div>
            <div class="col-md-6">
                <label>District:</label><br>
                    <select name="dist" class="form-control" required >
                        <option hidden="">Select One</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Feni">Feni</option>
                        <option value="Comilla">Comilla</option>
                        <option value="Bogra">Bogra</option>
                    </select>
            </div>
            
         </div>
          
          <div class="row">
            <div class="col-md-6">
                <label>Present address:</label><br>
                <textarea class="form-control" name="preAddress" required ></textarea>
           </div>
           <div class="col-md-6">
                <label>Permanent address:</label><br>
                <textarea class="form-control" name="perAddress" required ></textarea>
           </div>
         </div>
           <div class="row">
                <div class="col-md-4">
                    <label>Date Of Birth:</label><br>
                    <input type="date" name="dob" id="DoB" required />
                </div>
                <div class="col-md-4">
                    <label>Gender:</label><br>
                    <input type="radio" name="sex" value="male" required /><span>Male</span>
                    <input type="radio" name="sex" value="female" required /><span>Female</span>
                    <input type="radio" name="sex" value="other" required /><span>Other</span>
                </div>
                <div class="col-md-4">
                    <label>Marital status:</label><br>
                    <input type="radio" name="merital" value="married" required /><span>Married</span>
                    <input type="radio" name="merital" value="unmarried" required /><span>Unmarried</span>
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
<script src="../assets/jquery/cust_info.validation.js" type="text/javascript"></script>
</body>
</html>