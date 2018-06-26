<?php 
require_once "../dbconfig.php";
$checkUser = $con->query("SELECT * FROM admin");

if($checkUser->num_rows == 0){
	header('Location: register.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>
<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/bootstrap/css/custom.style.css" rel="stylesheet">
</head>

<body>
<?php 


if($_SERVER['REQUEST_METHOD']=='POST'){
 	extract($_POST);
 	$pass = md5($PW);
 	$tableData = $con->query("SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$pass'");
 	if($tableData->num_rows == 1){
		session_start();
		$session = $tableData->fetch_object();
		$_SESSION['auth'] = $session->username;
		
		if(isset($_SESSION['auth'])){
			header('Location: index.php');
		}else{
			header('Location: login.php');	
		}
		
	}else{
		echo "<script>alert('Username or Password is incorrect!!')</script>";	
	}
 	
}
?>
<div class="container">

	<div class="breadcrumb col-md-6 col-md-offset-3" id="Admin_log">
    
    <form method="post" id="log">
    <div class="row">
    <legend class="bg-primary text-center">Login as Administrator</legend>
    </div>
    <div class="row">
    <fieldset class="form-group">
    	<div class="col-md-3">
    	<label>Username: </label>
        </div>
        <div class="col-md-9">
        <input class="form-control" type="text" name="username" placeholder="Enter username" required />
        </div>
    </fieldset>
    </div>
    <div class="row">
    <fieldset class="form-group">
    	<div class="col-md-3">
    	<label>Password: </label>
    	</div>
        <div class="col-md-9">
        <input class="form-control" type="password" name="PW" placeholder="Enter password" required />
        </div>
   	</fieldset>
    </div>
    <div class="row">
    <fieldset class="form-group">
    <div class="col-md-9 col-md-offset-3">
    <input class="btn-lg btn-success btn-block" type="submit" name="submit" value="Login" />
    </div>
    </fieldset>
    </div>    
    </form>
     <div class="row">
    	<div class="col-md-9 col-md-offset-3">
            <div class="btn btn-default center-block"><a href="#">Forgot password?</a></div>
        </div>
     </div>
    </div>
</div>
<script src="../assets/jquery/jquery.js" type="text/javascript"></script>
<script src="../assets/jquery/jquery.validation.js" type="text/javascript"></script>
<script src="../assets/jquery/admin.login.validation.js" type="text/javascript"></script>
</body>
</html>