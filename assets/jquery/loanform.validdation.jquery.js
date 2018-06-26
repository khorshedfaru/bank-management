// JavaScript Document
$(document).ready(function(e) {
            $("#loanForm").validate({
				ruels:{
					loanAccNo: {
						required: true,
						minlength: 11
					},
					loanTo:{
						required: true,
						text: true
					},
					fname:{
						required: true,
						text: true
					},
					mname:{
						required: true,
						text: true
					},
					policy:{
						required: true,
					},
					amount:{
						required: true,
						number:true
					},
					duration:{
						required: true,
						maxlength: 2
					},
					nid:{
						required: true,
						minlength:13,
						maxlength:17
					},
					refAcc:{
						required: true,
						maxlength: 11,
						minlength: 11
					},
					addr:{
						
					},
					phone:{
						required: true,
					},
					photo:{
						required: false,
					}
					
				},
				messages:{
					loanAccNo: {
						required: "<span  style='color: red; font-size:11px;'>Please Enter an account numbre<span>",
						minlength: "<span  style='color: red; font-size:11px;'>Invalid account no.<span>",
					},
					loanTo:{
						required: "<span  style='color: red; font-size:11px;'>Please Enter the name.<span>",
						text: "<span  style='color: red;'>Please Enter text only.<span>"
					},
					fname:{
						required: "<span  style='color: red; font-size:11px;'>Please Enter father's name.<span>",
						text: "<span  style='color: red; font-size:11px;'>Please Enter text only.<span>"
					},
					mname:{
						required: "<span  style='color: red; font-size:11px;'>Please Enter mother's name.<span>",
						text: "<span  style='color: red; font-size:11px;'>Please Enter text only.<span>"
					},
					policy:{
						required: "<span  style='color: red; font-size:11px;'>Policy did not selected<span>",
					},
					amount:{
						required: "<span  style='color: red; font-size:11px;'>Please Enter the amount of loan.<span>",
						number:"<span  style='color: red; font-size:11px;'>Invalid amount.<span>"
					},
					duration:{
						required: "<span  style='color: red; font-size:11px;'>Please Enter the duration of loan.<span>",
						maxlength: "<span  style='color: red; font-size:11px;'>invalid duration.<span>"
					},
					nid:{
						required: "<span  style='color: red; font-size:11px;'>Please Enter the nid numbre<span>",
						minlength:"<span  style='color: red; font-size:11px;'>Invalid nid number.<span>",
						maxlength:"<span  style='color: red; font-size:11px;'>Invalid nid number.<span>"
					},
					refAcc:{
						required: "<span  style='color: red; font-size:11px;'>Please Enter reffered account numbre.<span>",
						maxlength: "<span  style='color: red; font-size:11px;'>Invalid ref account number.<span>",
						minlength: "<span  style='color: red; font-size:11px;'>Invalid ref account number.<span>"
					},
					addr:{
						required: "<span  style='color: red; font-size:11px;'>Please Enter address.<span>"
					},
					phone:{
						required: "<span  style='color: red; font-size:11px;'>Please Enter phone numbre<span>"
					},
					photo:{
						required: "<span  style='color: red; font-size:11px;'>Please Enter an account numbre<span>"
					}
				}
			})
        });