<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Panel</title>
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/bootstrap/css/custom.style.css" rel="stylesheet">

</head>

<body>
<div class="container">
	<div class="breadcrumb col-md-10 col-md-offset-1 top-scale-hundred">
	<form method="post" action="app_entry.php" enctype="multipart/form-data">
    	<div class="row" style="border:1px solid  #333;">
        <div class="col-md-6" style="padding-top:15px;">
    	<fieldset class="form-group">
        	<div class="col-md-4">
            	<label>First Name:</label>
            </div>
            <div class="col-md-8">
            	<input type="text" name="firstname" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-4">
            	<label>Last Name:</label>
            </div>
            <div class="col-md-8">
            	<input type="text" name="lastname" class="form-control">
            </div>
        </fieldset>
        </div>
        
        <div class="col-md-6" style="padding-top:15px;">
        <fieldset class="form-group">
        	<div class="col-md-4">
            	<label>E-mail:</label>
            </div>
            <div class="col-md-8">
            	<input type="email" name="email" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-4">
            	<label>Photo:</label>
            </div>
            <div class="col-md-8">
            	<input type="file" name="photo">
            </div>
        </fieldset>
        </div>
        </div>
        
        <div class="row" style="border:1px solid #333;">
        <legend class="btn btn-danger text-center">Personal Information</legend>
        <div class="col-md-6" style="padding-top:15px;">
        
        <fieldset class="form-group">
        
        	<div class="col-md-5">
            	<label>Father's Name:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="father" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Mother's Name:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="mother" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Gender:</label>
            </div>
            <div class="col-md-7">
            	<input type="radio" name="gender" value="Male"><span>Male</span>
                <input type="radio" name="gender" value="Female"><span>Female</span>
                <input type="radio" name="gender" value="Other"><span>Other</span>
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>NID:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="nid" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Date Of Birth:</label>
            </div>
            <div class="col-md-7">
            	<input type="date" name="dob" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Mailing Address:</label>
            </div>
            <div class="col-md-7">
            	<textarea name="maddress" class="form-control"></textarea>
            </div>
        </fieldset>
        
        </div>
        
        <div class="col-md-6" style="padding-top:15px;">
        
        <fieldset class="form-group">
        
        	<div class="col-md-5">
            	<label>Divition:</label>
            </div>
            <div class="col-md-7">
            	<select class="form-control">
                	<option>Select One</option>
                </select>
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>District:</label>
            </div>
            <div class="col-md-7">
            	<select class="form-control">
                	<option>Select One</option>
                </select>
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Religion:</label>
            </div>
            <div class="col-md-7">
            	<select class="form-control" name="religion">
                	<option>Select One</option>
                    <option value="Muslim">Muslim</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Catholic">Catholic</option>
                    <option value="Budist">Budist</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Gender:</label>
            </div>
            <div class="col-md-7">
            	<input type="radio" name="marital" value="Married"><span>Married</span>
                <input type="radio" name="marital" value="Unmarried"><span>Unmarried</span>
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Permanent Address:</label>
            </div>
            <div class="col-md-7">
            	<textarea name="peraddress" class="form-control"></textarea>
            </div>
        </fieldset>
        </div>
        </div>
        
        <div class="row">
        <legend class="btn btn-danger text-center">Educational Information</legend>
        <div class="breadcrumb col-md-6" style="border:1px solid #333;">
        <legend class="btn btn-primary text-center" style="margin-bottom:15px;">Post Graduate Degree</legend>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Graduation Type:</label>
            </div>
            <div class="col-md-7">
            	<select class="form-control" name="pdegree">
                	<option>Select One</option>
                    <option value="MBA">MBA</option>
                    <option value="MBS">MBS</option>
                    <option value="M.Sc">M.Sc</option>
                    <option value="MA">MA</option>
                    <option value="Kamil">Kamil</option>
                </select>
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Institute Name:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="pinstitute" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Roll No:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="pgroll" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Reg No:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="pgreg" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Passing Year:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="pyear" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>CGPA:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="pgcgpa" class="form-control">
            </div>
        </fieldset>
        </div>
        
        <div class="breadcrumb col-md-6" style="border:1px solid #333;">
        <legend class="btn btn-primary text-center" style="margin-bottom:15px;">Graduate Degree</legend>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Graduation Type:</label>
            </div>
            <div class="col-md-7">
            	<select class="form-control" name="gdegree">
                	<option>Select One</option>
                    <option value="BBA">BBA</option>
                    <option value="BSS">BSS</option>
                    <option value="B.Sc">B.Sc</option>
                    <option value="BA">BA</option>
                    <option value="Fajail">Fajail</option>
                </select>
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Institute Name:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="ginstitute" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Roll No:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="groll" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Reg No:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="greg" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Passing Year:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="gyear" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>CGPA:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="gcgpa" class="form-control">
            </div>
        </fieldset>
        </div>
       
        <div class="breadcrumb col-md-6" style="border:1px solid #333;">
        <legend class="btn btn-primary text-center" style="margin-bottom:15px;">HSC or Equivalent</legend>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Exam Type:</label>
            </div>
            <div class="col-md-7">
            	<select class="form-control" name="hexam">
                	<option>Select One</option>
                    <option value="HSC">HSC</option>
                    <option value="Alim">Alim</option>
                </select>
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Board:</label>
            </div>
            <div class="col-md-7">
            	<select class="form-control" name="hboard">
                	<option>Select One</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Comilla">Comilla</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Chitagong">Chitagong</option>
                    <option value="Sylet">Sylet</option>
                    <option value="Rajsahi">Rajsahi</option>
                    <option value="Madrasa">Madrasa</option>
                    <option value="Karigori">Karigori</option>
                </select>
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Institute Name:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="hinstitute" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Roll No:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="hroll" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Reg No:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="hreg" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Passing Year:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="hyear" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>GPA:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="hgpa" class="form-control">
            </div>
        </fieldset>
        </div>
       
        
        <div class="breadcrumb col-md-6 bg-danger" style="border:1px solid #333;">
        <legend class="btn btn-primary text-center" style="margin-bottom:15px;">SSC or Equivalent</legend>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Graduation Type:</label>
            </div>
            <div class="col-md-7">
            	<select class="form-control" name="secondary">
                	<option>Select One</option>
                    <option value="SSC">SSC</option>
                    <option value="Dakhil">Dakhil</option>
                    <option value="Vocational">Vocational</option>
                </select>
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Board:</label>
            </div>
            <div class="col-md-7">
            	<select class="form-control" name="sboard">
                	<option>Select One</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Comilla">Comilla</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Chitagong">Chitagong</option>
                    <option value="Sylet">Sylet</option>
                    <option value="Rajsahi">Rajsahi</option>
                    <option value="Madrasa">Madrasa</option>
                    <option value="Karigori">Karigori</option>
                </select>
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Institute Name:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="sinstitute" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Roll No:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="sroll" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Reg No:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="sreg" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>Passing Year:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="syear" class="form-control">
            </div>
        </fieldset>
        <fieldset class="form-group">
        	<div class="col-md-5">
            	<label>GPA:</label>
            </div>
            <div class="col-md-7">
            	<input type="text" name="sgpa" class="form-control">
            </div>
        </fieldset>
        </div>
        </div>
        <fieldset class="form-group">
            <div>
            	<input type="submit" name="submit" value="Submit" class="btn btn-success  btn-block">
            </div>
        </fieldset>
    </form>
	</div>
</div>
<script src="assets/jquery/jquery.js" type="text/javascript"></script>
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>