		<?php include 'template/header.php' ?>
        <div id="content" class="contact">
        		<h1>Hey man, contact me.</h1>
		</div>

		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		
		<script>
		    var bsProject = $('.project');
			function projectHeight() {
				var halfHeight = ($(window).height() / 2);
				console.log(windowHeight);
				bsProject.css({height: halfHeight});
			}
			function projectLoad () {
				$.each(bsProject, function(i, item) {
				    setTimeout(function() {
				        $(item).addClass('in');
				    }, 250 * i);
				})
			}
			$(window).load(function(){
				projectHeight();
				setTimeout(function(){projectLoad()}, 500);
			});
			$(window).resize(function(){
				projectHeight();
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
