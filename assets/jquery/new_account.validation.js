$(document).ready(function() {
    $("#newAcc").validate({
		rules: {
			accNo: {
				required: true,
				maxlength: 11,
				minlength: 11
			},
			accType:{
				required: true
			},
			intBal: {
				required: true
			},
			branceId: {
				required: true
			},
			fname:{
				required: true
			},
			lname: {
				required: true
			},
			phone: {
				required: true
			},
			custPhoto: {
				required: true,
				accept: "image/*"
			}
		},
		messages: {
			accNo: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>",
				maxlength: "<span class='text-danger' style='font-size:14px;'>Please enter at least 11 characters.</span>",
				minlength: "<span class='text-danger' style='font-size:14px;'>Please enter at least 11 characters.</span>"
			},
			accType:{
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			intBal: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			branceId: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			fname:{
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			lname: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			custPhoto: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>",
				accept: "<span class='text-danger' style='font-size:14px;'>Only jpg, jpeg and png image types are allowed</span>"
			}
		}
	})
});