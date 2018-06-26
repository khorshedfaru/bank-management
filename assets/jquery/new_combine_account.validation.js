$(document).ready(function() {
    $("#createAcc").validate({
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
			},
			father: {
				required: true
			},
			mother: {
				required: true
			},
			NID: {
				required: true
			},
			preAddress: {
				required: true
			},
			perAddress: {
				required: true
			},
			postcode:{
				required: true
			},
			religion: {
				required: true
			},
			division: {
				required: true
			},
			dist: {
				required: true
			},
			sex: {
				required: true
			},
			merital: {
				required: true
			},
			dob: {
				required: true
			},
			phone: {
				required: true
			},
			Nname: {
				required: true
			},
			rel: {
				required: true
			},
			Nnid: {
				required:  true
			},
			Nphone: {
				required: true
			},
			Nsex: {
				required: true	
			},
			nomPhoto: {
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
			},
			father: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			mother: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			NID: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			preAddress: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			perAddress: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			postcode:{
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			religion: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			division: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			dist: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			sex: {
				required: ""
			},
			merital: {
				required: ""
			},
			dob: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			phone: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			Nname: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			rel: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			Nnid: {
				required:  "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			Nsex: {
				required: ""
			},
			Nphone: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>"
			},
			nomPhoto: {
				required: "<span class='text-danger' style='font-size:14px;'>This field is empty</span>",
				accept: "<span class='text-danger' style='font-size:14px;'>Only jpg, jpeg and png image types are allowed</span>"
			}
		}
	})
});