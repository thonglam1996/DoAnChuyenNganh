function initScroll()
{
	$('#auto-scroll').fadeIn();
}
function pageScroll() {
		window.scrollBy(0,1);
		scrolldelay = setTimeout(pageScroll,45);
}
$(function()
{
	$(window).scroll(function()
	{
		if ($(this).scrollTop() != 0)
		{
			$('#bttop').fadeIn();
			$('#auto-scroll').fadeOut();
		}
		else
		{
			$('#bttop').fadeOut();
			$('#auto-scroll').fadeIn();
		}
	});
	$('#bttop').click(function()
	{
		$('body,html').animate(
		{
			scrollTop: 0
		}, 800);
		clearTimeout(scrolldelay);
	});
	$('#auto-scroll').click(function()
	{
		pageScroll();	
	});
});