/*
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
*/
$(document).ready(function() {
    $("#custInfo").validate({
		rules: {
			accNo: {
				required: true
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
			}
		},
		messages: {
			accNo: {
				required: "<span class='text-danger' style='font-size:14px;'>Account No can not be empty</span>"
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
			}
		}
	})
});