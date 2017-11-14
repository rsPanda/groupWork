$().ready(function(){

	$("#register").validate({

		rules: {
			firstName: {
				required: true,
				minlength:2
			},

			lastName: {
				required: true,
				minlength: 2
			},
								
			email: {
				required: true,
				email: true
			},

			password:{ 
				required:true,
				minlength: 6,
				maxlength: 16
			},
			confirm:{
				required: true,
				equalTo: "#password"
			}
		},

		messages: {
			firstName: {
				required: "Please specify your name (at least 2 characters)",
				minlength: "Please specify your name (at least 2 characters)"
			},

			lastName: {
				required: "Please specify your name (at least 2 characters)",
				minlength: "Please specify your name (at least 2 characters)"
			},
								
			email: {
				equired: "We require an Email to contact you",
				email: "Your email address must be in the format of name@domain.com"
			},

			password:{
				required: "Please enter a password between 6 and 16 letters long",
				minlength: "Please enter a password between 6 and 16 letters long",
				maxlength: "Please enter a password between 6 and 16 letters long"
			},

			confirm:{
				required: "Please confirm your password",
				equalTo: "Does not match password entered above."
			}
		}	

	});
});