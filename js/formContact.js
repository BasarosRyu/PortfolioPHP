$(document).ready(function(){

	$('#envoyer').click(function() {

		$.post(
			'sendMail.php',
			{
				de : $('#mail-form').val(),
				sujet : $('#subject-form').val(),
				message : $('#msg-form').val()
			},
			function(data){
				if(data == 'mail not good') {
					$('#result').html("Le mail est invalide");
					$('#result').css({
						display : 'block',
						'background-color' : '#ff0000',
						border : '1px solid #ff0000'
					});
				}
				if(data == 'champ not good') {
					$('#result').html("Un champ est vide");
					$('#result').css({
						display : 'block',
						'background-color' : '#ff0000',
						border : '1px solid #ff0000'
					});
				}

				if(data == 'good') {
					$('#result').html("Le mail a été envoyé");
					$('#result').css({
						display : 'block',
						'background-color' : '#018205',
						border : '1px solid #018205'
					});
				}
			},
			'text'
			);
	})
})