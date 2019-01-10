$(document).ready(function(){

	$('.tab-list li').click(function(event)
	{
		var list_li = document.getElementsByClassName('tab-pane');
		var i = 0;
		$('.tab-list li').removeClass('active');
		for(i; i< list_li.length; i += 1)
		{
			$(list_li[i]).removeClass('active');
		}
		$(this).addClass('active');

		var temp = $(this).data('target');
		$(temp).addClass('active');
	});
})