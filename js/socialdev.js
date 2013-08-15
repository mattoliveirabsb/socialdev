function slide() {


	$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		timeout: 3000
	});
});

}
//MENU
function responsive(){

	$(document).ready(function()
		{

		$(".responsive-menu").click(function()
		{
		$(".menu").slideToggle();
		});

		$(window).resize(function()
		{
		if($(this).width() < 767)
		{
		$(".menu").hide();
		} 
		else
		{
		$(".menu").show();
		}

		});
		});


}