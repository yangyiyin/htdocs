$(document).ready(function() {
						  
$(".nav ul .nav_li").hover(function() { //Hover over event on list item
	$(this).find("a:first").removeClass("nav_a");
	$(this).find("a:first").addClass("intro");
	//$(this).css({ 'background' : '#1376c9 url(topnav_active.gif) repeat-x'}); //Add background color + image on hovered list item
	$(this).find(".sun_nav").slideDown(100); //Show the subnav
} ,function() { //on hover out...
	//$(this).css({ 'background' : 'none'}); //Ditch the background
	$(this).find("a:first").removeClass("intro");
	$(this).find(".sun_nav").slideUp(100); //Hide the subnav
});	
});