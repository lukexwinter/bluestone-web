/*************************************************/
/***************Bluestone Menu********************/
/*************************************************/

/*Make Sure The Nav Always stays to the bottom*/
bsHeader = $('#contain-head header');
menuText = $('#contain-head > header > nav > a.menu-button > span');
windowWidth = $(window).width();

function sizeHeader() {
	//Use Window Inner Height for iPads
	if (navigator.userAgent.match(/iPad;.*CPU.*OS 7_\d/i) && !window.navigator.standalone) {
	   var windowHeight = window.innerHeight;
	} else {
		var windowHeight = $(window).height();
	}
	
	if ( windowWidth > 767 ) {
		var headerHeight = windowHeight - 69;
	} else {
		var headerHeight = windowHeight - 44;
	}
	
	$('#contain-head').css({height: windowHeight});
	bsHeader.css({top: windowHeight, height: windowHeight});
	$('#content.home').css({height: windowHeight});
	
	
	if ( $('body').hasClass('open') ) {
		var headerHeightString = -headerHeight+'px';
		bsHeader.css({"-moz-transform":"translate(0,"+headerHeightString+")", "-o-transform":"translate(0,"+headerHeightString+")", "-webkit-transform":"translate(0,"+headerHeightString+")", "transform":"translate(0,"+headerHeightString+")"});	
	} 
	
	return headerHeight;
	return windowHeight;
	
}

function showHeader(){	
	headerHeight = sizeHeader();
	
	bsHeader.show(function() {
    	bsHeader.css({top: headerHeight});
  	});
	
}

$(window).load(function(){
	sizeHeader();
	setTimeout(function(){showHeader()}, 1000);
	headerHeight = sizeHeader();
	windowHeight = sizeHeader();
	
});

$(window).resize(function(){
	sizeHeader();
	setTimeout(function(){showHeader()}, 1000);
	headerHeight = sizeHeader();
	windhowHeight = sizeHeader();
});

//Menu Click Function
$('.menu-button').click(function(e) {
	e.preventDefault();
	
	$('body').toggleClass('open');
	animateMenuItems();
	
	if ( $('body').hasClass('open') ) {
		menuText.text('CLOSE');
	} else {
		menuText.text('MENU');
	}
});


//Animate Menu Items
function animateMenuItems() {
	var headerPosition = $('header').offset();
	var headerPositionTop = headerPosition.top;
	var navItems = $('header nav ul li');
	
	
	if ( headerPositionTop > 100 ) {
		var headerHeightString = -headerHeight+'px';
	
		//Transform the Menu to The Top of the Window
		bsHeader.css({"-moz-transform":"translate(0,"+headerHeightString+")", "-o-transform":"translate(0,"+headerHeightString+")", "-webkit-transform":"translate(0,"+headerHeightString+")", "transform":"translate(0,"+headerHeightString+")"});
		
		$.each(navItems, function(i, item) {
		    setTimeout(function() {
		        $(item).addClass('in');
		    }, 50 * i);
		})
		
	} else if ( headerPositionTop < 100 ) {
		
		//Transform the Menu to The Top of the Window
		bsHeader.css({"-moz-transform":"translate(0,0)", "-o-transform":"translate(0,0)", "-webkit-transform":"translate(0,0)", "transform":"translate(0,0)"});
		$.each(navItems, function(i, item) {
		    setTimeout(function() {
		        $(item).removeClass('in');
		    }, 50 * i);

		})
	}
};
