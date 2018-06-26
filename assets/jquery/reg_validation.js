// JavaScript Document
// JavaScript Document
$(document).ready(function() {
    $("#register").validate({
		rules: {
			name:{
				required: true
			},
			username: {
				required: true,
				minlength: 8
			},
			PW: {
				required: true,
				minlength: 6
			},
			conFpw: {
				required: true,
				minlength: 6,
				equalTo: "#pw"
			},
			role: {
				required: true
			}
		},
		
		messages: {
			name:{
				required: "<span style='color: red; font-size:12px;'>Please enter Your name.</span>"
			},
			username: {
				required: "<span style='color: red; font-size:12px;'>Please enter a valid username.</span>",
				minlength: "<span style='color: red; font-size:12px;'>Username should be between 8 to 12 caharacters.</span>"
			},
			PW: {
				required: "<span style='color: red; font-size:12px;'>Please enter the password</span>",
				minlength: "<span style='color: red; font-size:12px;'>Password should be 6 to 12 character.</span>"
			},
			conFpw: {
				required: "<span style='color: red; font-size:12px;'>Password does not matching.</span>",
				minlength: "<span style='color: red; font-size:12px;'>Password does not matching.</span>",
				equalTo: "<span style='color: red; font-size:12px;'>Password does not matching.</span>"
			},
			role: {
				required: "<span style='color: red; font-size:12px;'>Please Enter a role</span>"
			}
		}
	})
});