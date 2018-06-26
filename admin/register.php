<?php 
require_once "../dbconfig.php";
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
 	$createAdmin = $con->query("INSERT INTO admin(`name`, `username`, `password`, `role`) VALUES('$name', '$username', '$pass', '$role')");
	if($createAdmin){
		header('Location: login.php');
	}
 	
}
?>
<div class="container">

	<div class="breadcrumb col-md-6 col-md-offset-3" id="Admin_log">
    
    <form method="post" id="register">
    <div class="row">
    <legend class="bg-primary text-center">Register</legend>
    </div>
    <div class="row">
    <fieldset class="form-group">
    	<div class="col-md-3">
    	<label>Name: </label>
        </div>
        <div class="col-md-9">
        <input class="form-control" type="text" name="name" placeholder="Enter name" required />
        </div>
    </fieldset>
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
    	<label>Role: </label>
        </div>
        <div class="col-md-9">
        <input class="form-control" type="text" name="role" placeholder="Role" required />
        </div>
    </fieldset>
    </div>
    <div class="row">
    <fieldset class="form-group">
    	<div class="col-md-3">
    	<label>Password: </label>
    	</div>
        <div class="col-md-9">
        <input class="form-control" type="password" name="PW" id="pw" placeholder="Enter password" required />
        </div>
   	</fieldset>
    </div>
    <div class="row">
    <fieldset class="form-group">
    	<div class="col-md-3">
    	<label>Confirm Password: </label>
    	</div>
        <div class="col-md-9">
        <input class="form-control" type="password" name="conFpw" placeholder="Confirm password" required />
        </div>
   	</fieldset>
    </div>
    <div class="row">
    <fieldset class="form-group">
    <div class="col-md-9 col-md-offset-3">
    <input class="btn-lg btn-success btn-block" type="submit" name="submit" value="Register" />
    </div>
    </fieldset>
    </div>    
    </form>
    </div>
</div>
<script src="../assets/jquery/jquery.js" type="text/javascript"></script>
<script src="../assets/jquery/jquery.validation.js" type="text/javascript"></script>
<script src="../assets/jequery/reg_validation.js" type="text/javascript"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>