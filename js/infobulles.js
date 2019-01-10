$(document).ready(function(){

	$('#framework').mouseover(function() {
		$('.other-list').css('display', 'block');
	})

	$('#framework').mouseleave(function() {
		$('.other-list').css('display', 'none');
	})
})