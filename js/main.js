/*************************************************/
/***************Bluestone Menu********************/
/*************************************************/

/*Make Sure The Nav Always stays to the bottom*/

function sizeHeader() {
	var windowHeight = $(window).height();
	var headerHeight = windowHeight - 69;
	$('#contain-head').css({height: windowHeight});
	$('#contain-head header').css({top: headerHeight, height: windowHeight});
}

$(document).ready(function(){
	sizeHeader();
});

$(window).resize(function(){
	sizeHeader();
});

//Menu Click Function
$('.menu-button').click(function(e) {
	e.preventDefault();
	$('header').toggleClass('open');
	animateMenuItems();
});

//Animate Menu Items
function animateMenuItems() {
	var headerPosition = $('header').offset();
	var headerPositionTop = headerPosition.top;
	var navItems = $('header nav ul li');
	console.log(headerPosition.top);
	
	if ( headerPositionTop < 100 ) {
		$.each(navItems, function(i, item) {
		    setTimeout(function() {
		        $(item).removeClass('in');
		    }, 50 * i);
		})
		
	} else if ( headerPositionTop > 100 ) {
		$.each(navItems, function(i, item) {
		    setTimeout(function() {
		        $(item).addClass('in');
		    }, 50 * i);

		})
	}
};
