// JavaScript Document
 function validate(){
		var accNo = document.loanForm.loanAccNo.value;
		var name = document.loanForm.loanTo.value;
		var father = document.loanForm.fname.value;
		var mother = document.loanForm.mname.value;
		var policy = document.loanForm.policy.value;
		var amt = document.loanForm.amount.value;
		var duration = document.loanForm.duration.value;
		var nid = document.loanForm.nid.value;
		var ref = document.loanForm.refAcc.value;
		var address = document.loanForm.addr.value;
		var phone = document.loanForm.phone.value;
		
		//matchin variable
		var numMatch = new RegExp("[0-9]");
		var alphaMatch = new RegExp("[A-Za-z]");
		//matchin variable
		
		if(accNo == ""){
			document.getElementById("accErr").innerHTML = "Fill out this field";
			return false;
		}else if(!accNo.match(numMatch) || accNo.length != 11 ){
			document.getElementById("accErr").innerHTML = "Invalid accoun number";
			return false;
		}else{
			document.getElementById("accErr").innerHTML = "";	
		}
		
		if(name  ==  ""){
			document.getElementById("nameErr").innerHTML = "Fill out this field";
			return false;
		}else if(!name.match(alphaMatch)){
			document.getElementById("nameErr").innerHTML = "Input an alphabetic value";
			return false;
		}else{
			document.getElementById("nameErr").innerHTML = "";
		}
		
		if(father == ""){
			document.getElementById("fnameErr").innerHTML = "Fill out this field";
			return false;
		}else if(!father.match(alphaMatch)){
			document.getElementById("fnameErr").innerHTML = "Input an alphabetic value";
			return false;
		}else{
			document.getElementById("fnameErr").innerHTML = "";
		}
		
		if(mother == ""){
			document.getElementById("mnameErr").innerHTML = "Fill out this field";
			return false;
		}else if(!mother.match(alphaMatch)){
			document.getElementById("mnameErr").innerHTML = "Input an alphabetic value";
			return false;
		}else{
			document.getElementById("mnameErr").innerHTML = ""	
		}
		
		if(policy == ""){
			document.getElementById("polyErr").innerHTML = "Select the policy";
			return false;
		}else{
			document.getElementById("polyErr").innerHTML = "";
		}
		
		if(amt == ""){
			document.getElementById("amtErr").innerHTML = "Fill out this field";
			return false;
		}else if(!amt.match(numMatch)){
			document.getElementById("amtErr").innerHTML = "Invalid amount";
			return false;
		}else{
			document.getElementById("amtErr").innerHTML = "";
		}
		
		if(duration == ""){
			document.getElementById("duErr").innerHTML = "Fill out this field";
			return false;
		}else if(!duration.match(numMatch) || !duration.length >= 2 ){
			document.getElementById("duErr").innerHTML = "Invalid duration";
			return false;
		}else{
			document.getElementById("duErr").innerHTML = "";
		}
		
		if(nid == ""){
			document.getElementById("nidErr").innerHTML = "Fill out this field";
			return false;
		}else if(!nid.match(numMatch) || !(nid.length >= 13 && nid.length <= 17)){
			document.getElementById("nidErr").innerHTML = "Invalid NID number";
			return false;
		}else{
			document.getElementById("nidErr").innerHTML = "";
		}
		
		if(ref == ""){
			document.getElementById("refErr").innerHTML = "Fill out this field";
			return false;
		}else if(!ref.match(numMatch) || ref.length != 11 ){
			document.getElementById("refErr").innerHTML = "Invalid reference account";
			return false;
		}else{
			document.getElementById("refErr").innerHTML = "";
		}
		
		
		if(address == ""){
			document.getElementById("addrErr").innerHTML = "Fill out this field";
			return false;
		}else{
			document.getElementById("addrErr").innerHTML = "";
		}
		
		if(phone == ""){
			document.getElementById("phoneErr").innerHTML = "Fill out the field";
			return false;
		}else if(!phone.match(numMatch) || phone.length != 11 ){
			document.getElementById("phoneErr").innerHTML = "Invalid phone number";
			return false;
		}else{
			document.getElementById("phoneErr").innerHTML = "";
		}
	 }