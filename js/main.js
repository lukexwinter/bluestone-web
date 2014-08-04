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
		var headerHeight = windowHeight - 55;
	} else {
		var headerHeight = windowHeight - 55;
	}
	
	
	$('#content.home').css({height: windowHeight});
	
	
	if ( $('body').hasClass('open') ) {
		var headerHeightString = -headerHeight+'px';
		bsHeader.css({"-moz-transform":"translate(0,"+headerHeightString+")", "-o-transform":"translate(0,"+headerHeightString+")", "-webkit-transform":"translate(0,"+headerHeightString+")", "transform":"translate(0,"+headerHeightString+")"});	
	} 
	
	return headerHeight;
	return windowHeight;
	
}


$(window).load(function(){
	sizeHeader();
	setTimeout(function(){bsHeader.css({bottom: 0})}, 1000);
	headerHeight = sizeHeader();
	windowHeight = sizeHeader();
	
	$('#overlay').fadeOut(2000);
	$('.blink').hide();
});

$(window).resize(function(){
	sizeHeader();
	headerHeight = sizeHeader();
	windhowHeight = sizeHeader();
});

//Menu Click Function
$('.bars').click(function(e) {
	e.preventDefault();
	$('body').toggleClass('open');
	animateMenuItems();
});

$('.menu-button').click(function(e) {
	e.preventDefault();
});


//Animate Menu Items
function animateMenuItems() {
	var headerPosition = $('header').position();
	var headerPositionTop = headerPosition.top;
	var navItems = $('header nav ul li');
	
	/*
	//Make Project Header Relative on Menu Open
	if ($('.project-head').length > 0) {
		$('.project-head').toggleClass('relative');
	}
	*/ 
	
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
		
		/*
		//Re-Fix Position When Menu Closes
		if ($('.project-head').length > 0) {
			$('.project-head').css({position: 'fixed'});
		}
		*/
		
		//Transform the Menu to The Top of the Window
		bsHeader.css({"-moz-transform":"translate(0,0)", "-o-transform":"translate(0,0)", "-webkit-transform":"translate(0,0)", "transform":"translate(0,0)"});
		$.each(navItems, function(i, item) {
		    setTimeout(function() {
		        $(item).removeClass('in');
		    }, 50 * i);

		})
	}
};

//Pass-through Hack
function passThrough(e) {
    $("a").each(function() {
       // check if clicked point (taken from event) is inside element
       var mouseX = e.pageX;
       var mouseY = e.pageY;
       var offset = $(this).offset();
       var width = $(this).width();
       var height = $(this).height();

       if (mouseX > offset.left && mouseX < offset.left+width 
           && mouseY > offset.top && mouseY < offset.top+height)
         $(this).click(); // force click event
    });
}

$("#contain-head").click(passThrough);
