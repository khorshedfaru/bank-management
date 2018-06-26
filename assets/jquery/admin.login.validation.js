// JavaScript Document
$(document).ready(function() {
    $("#log").validate({
		rules: {
			username: {
				required: true
			},
			PW: {
				required: true
			}
		},
		
		messages: {
			username: {
				required: "<span style='color: red; font-size:12px;'>Please enter a valid username.</span>"
			},
			PW: {
				required: "<span style='color: red; font-size:12px;'>Please enter the password</span>"
			}
		}
	})
});