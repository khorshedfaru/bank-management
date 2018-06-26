// JavaScript Document
$(document).ready(function(e) {
    $("#dipoForm").validate({
		rules: {
			accNo: {
				required: true,
				minlength: 11
			},
			dipoAmount: {
				required: true
			},
			bearEr: {
				required: true	
			}
		},
		
		messages: {
			accNo: {
				required: "<span style='color: red; font-size:12px;'>You must enter an account number.</span>",
				minlength: "<span style='color: red; font-size:12px;'>Account no must be 11 character.</span>"
			},
			dipoAmount: {
				required: "<span style='color: red; font-size:12px;'>Please enter an amount</span>"
			},
			bearEr: {
				required: "<span style='color: red; font-size:12px;'>Please enter the bearer's name</span>"	
			}
		}
	})
});