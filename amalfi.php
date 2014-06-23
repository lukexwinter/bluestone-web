		<?php include 'template/header.php' ?>
        <div id="content" class="work-detail amalfi">
        	<div class="project-head"><img src="img/amalfi-logo.png" /></div>
			<div class="project-body">
				<div class="title clearfix">
					<h2>Amalfi Stonebriar</h2> 
					<h3>Brand Identity, Print, Advertising, Signage, 3D, Web Design, Strategy</h3>
				</div>
			
				<div class="summary clearfix">
					<p class="left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie, ante quis tincidunt suscipit, arcu felis commodo lacus, vel consectetur diam magna non lectus. Vestibulum vitae malesuada tellus.</p>
					<p class="right">Sed non pharetra magna. Nunc accumsan sit amet augue quis placerat. Nam gravida ante ut felis facilisis, id lacinia tortor consequat.</p>
				</div>
			
				<div class="work-block">
					<div class="caption-wrapper"><div class="caption">Pocket Folder &amp; brochure<span class="grid-marker"></span></div></div>
					<img src="img/amalfi-1.jpg" alt="" />
					<img src="img/amalfi-2.jpg" alt="" />
				</div>
			
				<div class="work-block clearfix">
					<span class="caption">Pocket Folder &amp; brochure<span class="grid-marker"></span></span>
					<img class="callout" src="img/amalfi-3.jpg" alt="" />
					<p class="callout">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie, ante quis tincidunt suscipit, arcu felis commodo lacus, vel consectetur diam magna non lectus. Vestibulum vitae malesuada tellus. Sed non pharetra magna. Nunc accumsan sit amet augue quis placerat. Nam gravida ante ut felis facilisis, id lacinia tortor consequat.</p>
				</div>
			
				<div class="work-block">
					<span class="caption">Responsive Website<span class="grid-marker"></span></span>
					<img src="img/amalfi-4.jpg" alt="" />
				</div>
			</div>
        </div>

		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		
		<script>
			function sizeCaptions() {
				$('.caption').each(function(){
				       var parentHeight = $(this).parent().height();   
				       $(this).css({width: parentHeight});
				});   
			}
			
			$(window).load(function(){
				sizeCaptions();
			})
			
			$(window).resize(function(){
				sizeCaptions();
			})
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
