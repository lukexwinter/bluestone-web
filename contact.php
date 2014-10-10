		<?php include $_SERVER['DOCUMENT_ROOT']."/template/header.php" ?>
		<section id="content" class="contact">
			<div class="hometype">
        		<h1>Challenges<br /> Welcome</h1>
				<span class="grid-marker"></span>
			</div>
			<aside class="opportunities">
				<h3>CAREERS</h3>
				<ul>
					<li><a href="">Creative Technologist</a></li>
					<li><a href="">Senior Copywriter</a></li>
					<li><a href="">Art Director</a></li>
					<li><a href="">Junior Designer</a></li>
					<li><a href="">Junior Developer</a></li>
					<li><a href="">Videographer / Editor</a></li>
					<li><a href="">Student Intern</a></li>
				</ul>
			</aside>
			<fieldset id="contact_form">
				<h2>Get stoned with us</h2>
				<p>bluestone is always accepting new challenges from our clients and that means we’re always interested in fresh talent to meet those challenges. We believe the company we keep will continue to make us grow and, most importantly, make us better at what we do. If you are a designer, photographer, illustrator, web master, account executive, marketing genius or fresh out of school, feel free to send us your resume and a little something interesting about yourself below.</p>
				<img src="ajax-loader.gif" class="loading-img" style="display:none">
				<div id="result"></div>
				<div class="form">
					<img src="ajax-loader.gif" class="loading-img" style="display:none">
					<textarea name="message" id="message" placeholder="Tell us something interesting about yourself..."></textarea>
					<input type="file" name="file_attach" id="file_attach" />
				    <button class="submit_btn" id="submit_btn">Submit</button>
				</div>
			</fieldset>
			<aside class="address">
				<p>
					bluestone<br />
					631 main street<br />
					cincinnati, oh 45202<br />
					<br />
					513.421.2763<br />
					info@thecolorbluestone.com
				</p>
			</aside>
			<div style="clear: both;"></div>
		</div>
		
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
				
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		
		<script>
		$(document).ready(function() {
		    $("#submit_btn").click(function() { 
		        //get input field values
		        var attach_file     = $('input[name=file_attach]')[0].files[0];
		        var user_message    = $('textarea[name=message]').val();
        
		        //simple validation at client's end
		        //we simply change border color to red if empty field using .css()
		        var proceed = true;
		    
		        if(user_message=="") {  
		            $('textarea[name=message]').css('border-color','#0075be'); 
		            proceed = false;
		        }

		        //everything looks good! proceed...
		        if(proceed) 
		        {
		            $(".loading-img").show(); //show loading image
		            $(".submit_btn").hide(); //hide submit button
            
		            //data to be sent to server         
		            var post_data = new FormData();    
		            post_data.append( 'userMessage',user_message);
		            post_data.append( 'file_attach', attach_file );
            
		            //instead of $.post() we are using $.ajax()
		            //that's because $.ajax() has more options and can be used more flexibly.
		            $.ajax({
		              url: 'contact_me.php',
		              data: post_data,
		              processData: false,
		              contentType: false,
		              type: 'POST',
		              dataType:'json',
		              success: function(data){
		                    //load json data from server and output message     
		                    if(data.type == 'error')
		                    {
		                        output = '<div class="error">'+data.text+'</div>';
		                    }else{
		                        output = '<div class="success">'+data.text+'</div>';
                        
		                        //reset values in all input fields
		                        $('#contact_form input').val(''); 
		                        $('#contact_form textarea').val(''); 
		                    }
                    
		                    $("#result").hide().html(output).show(); //show results from server
		                    $(".loading-img").hide(); //hide loading image
		                    $(".submit_btn").show(); //show submit button
		              }
		            });

		        }
		    });
    
		    //reset previously set border colors and hide all message on .keyup()
		    $("#contact_form input, #contact_form textarea").keyup(function() { 
		        $("#contact_form input, #contact_form textarea").css('border-color',''); 
		        $("#result").hide();
		    });
    
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
