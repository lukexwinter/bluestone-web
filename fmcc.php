		<?php include $_SERVER['DOCUMENT_ROOT']."/template/header.php" ?>
		<link rel="stylesheet" href="css/rs-minimal-white.css">
        <div id="content" class="work-detail fmcc">
        	<div class="project-head"><img src="img/fmcc-logo.png" /></div>
			<div class="project-body">
				<div class="title clearfix">
					<h2>Fort Mitchell Country Club</h2> 
					<h3>Web Design, Development, Strategy</h3>
				</div>
			
				<div class="summary clearfix">
					<h4>Bringing elegance and prestige to a brand that offers just that</h4>
					<p class="left">As one of the most storied and prestigious country clubs in the area, Fort Mitchell CC is a true getaway from everyday life. The club offers world class facilities, yet lacked a distinguishable face to present it’s qualities to the masses. At bluestone, we were tasked to not only build a memorable one-of-a-kind online experience, but give the club a needed makeover by dusting off the old cobwebs.</p>
					<p class="right">The result became a very unique web presence second to none among it’s competitors. We offer a detailed look at the challenging 9 hole course, along with beautiful imagery around the club, enticing visitors to learn more about this wonderful place. By implementing a calendar of events into the site, club members have been able to stay current and engaged into what’s going on at Fort Mitchell Country Club. <a href="http://www.fortmitchellcc.com" target="_blank">View site</a></p>
				</div>
			
				<div class="work three-quarters">
					<span class="caption">Website<span class="grid-marker"></span></span>
					<img class="lazy" data-original="<?php echo MAINURL.""; ?>/img/fmcc-brand-three-quarters-1.jpg" alt="" />
				</div>

				<div class="work full">
					<div class="web full-width-slider royalSlider heroSlider rsMinW rsHor rsWithBullets">
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>fmcc-web-slide-1.jpg"></a>
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>fmcc-web-slide-2.jpg"></a>
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>fmcc-web-slide-3.jpg"></a>
					</div>
				</div>
				
				<div class="clearfix">
					<p class="work type">
						The country club offers many opportunities to relax and celebrate any occasion, and we brought those to life. Beautiful photography only captures a fraction of what Fort Mitchell’s beauty has in store.
					</p>
					<div class="work half">
						<img class="lazy" data-original="<?php echo MAINURL.""; ?>/img/fmcc-web-half-1.jpg" alt="" />
						<img class="lazy" data-original="<?php echo MAINURL.""; ?>/img/fmcc-web-half-2.jpg" alt="" />
					</div>
				</div>

				
				
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				
				
			</div>
        </div>

		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		
		
			
			<script>
				/*Royal Slider*/
				jQuery(document).ready(function($) {
				  $('.full-width-slider').royalSlider({
				    arrowsNav: false,
				    loop: false,
				    imageScaleMode: 'fill',
				    arrowsNavAutoHide: false,
				    autoScaleSlider: true, 
				    controlNavigation: 'bullets',
				    thumbsFitInViewport: false,
				    navigateByClick: true,
				    startSlideId: 0,
				    autoPlay: false,
				    transitionType:'move',
				    globalCaption: false
				  });
				});
				
				/*Lazy Load*/	
				$("img.lazy").lazyload({
				    effect : "fadeIn"
				});
				
				// Trigger the 
				$(window).scroll(function() {
					if ( $('#scroll-video').visible( true ) == true ) {
						$('#scroll-video').get(0).play()
					} else {
						$('#scroll-video').get(0).pause();
					}
				});
			</script>
		

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
