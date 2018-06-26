
$(document).ready(function() {
    $("#addNom").validate({
		rules: {
			accNo: {
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