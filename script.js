$().ready(function(){
 
	$("#register").validate({
		rules: {
			firstName: {
				required: true,
				minlength:2,
				lettersonly:true
			},

			lastName: {
				required: true,
				minlength: 2,
				lettersonly:true
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
	$(".gameContent").validate({
		rules: {
			gameName: {
				required: true,
				minlength:2
			},
			newImg:{
				required:true,
				extension: 'jpg|jpeg'
			},
			gameDesc: {
				required: true,
				minlength: 2,
				maxlength: 600
			},
								
			newRelease: {
				required: true
			},

			newGenre:{ 
				required:true
			},
			newConsole:{
				required: true
			}
		},
		messages: {
			gameName: {
				required: "Please specify the game name (at least 2 characters)",
				minlength: "Please specify the game name (at least 2 characters)"
			},
			newImg:{
				required:"Please select an JPG file for the upload of a Game Image",
				accept: "Please select an JPG file for the upload of a Game Image"
			},

			gameDesc: {
				required: "Please enter the game description (between 2 and 600 characters)",
				minlength: "Please enter the game description (between 2 and 600 characters)",
				maxlength: "Please enter the game description (between 2 and 600 characters)"
			},
								
			newRelease: {
				required: "Please enter a release date, if none announce enter TBC",
			},

			newGenre:{
				required: "Please enter a genre",
			},

			newConsole:{
				required: "Please enter a console",
			}

		},	

	});
	$(".postContent").validate({
		rules: {
			game: {
				required: true
			},

			title: {
				required: true
			},
								
			date: {
				required: true
			},

			contents:{ 
				required:true,
				minlength: 2,
				maxlength: 600
			},
			postLink:{
				required:true,
				url:true
			},
			outlet:{
				required: true
			}
		},
		messages: {
			game: {
				required: "Please specify the game that this article is about",			
			},

			title: {
				required: "Please enter the post title (between 2 and 600 characters)",				
			},
								
			date: {
				required: "Please enter a release date, if none announce enter TBC",
			},

			contents:{
				required: "Please enter the post contents (between 2 and 600 characters)",
				minlength: "Please enter the post contents (between 2 and 600 characters)",
				maxlength: "Please enter the post contents (between 2 and 600 characters)"
			},

			postLink:{
				required: "Please enter a URL link to the news article",
				url: "Please enter a URL link to the news article"
			},
			outlet:{
				required: "Please enter the outlet the article is from",
			}

		},
	});	
});