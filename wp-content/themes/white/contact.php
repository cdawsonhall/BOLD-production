<?php
$msg='* = required field';
if(isset($_GET['msg']) && $_GET['msg']=='missing-variables') {
	$msg='There was an error sending your message. Please try again.';
} else if(isset($_GET['msg']) && $_GET['msg']=='invalid-email-address') {
	$msg='There was an error sending your message. Please try again.';
} else if(isset($_GET['msg']) && $_GET['msg']=='mail-failed') {
	$msg='There was an error sending your message. Please try again.';
} else if(isset($_GET['msg']) && $_GET['msg']=='mail-sent') {
	$msg='Message sent.';
}
?><!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />

<title>Cartel Design Studio</title>

<link rel="stylesheet" type="text/css" href="css/flexslider.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css"/>
<link rel="stylesheet" type="text/css" href="css/epicfullscreen.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/udt_shortcodes.css" />
<link rel="stylesheet" type="text/css" href="css/udt_media_queries.css" />

<!--font-->
<link rel="stylesheet" type="text/css" href="css/font/bebasneue.css"/>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Quicksand" />

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--js-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.epicHover-fadeZoom.js"></script>
<script type="text/javascript" src="js/jquery.epicfullscreen.js"></script>
<script type="text/javascript" src="js/jquery.lazyload.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/googlemaps.js"></script>
<script type='text/javascript' src='js/settings.js'></script>
<script type='text/javascript' src='js/contact.js'></script>

<script type="text/javascript">
	
			/*device check
			---------------------*/
			
			var isMobile = false;
	
			if( navigator.userAgent.match(/Android/i) || 
				navigator.userAgent.match(/webOS/i) ||
				navigator.userAgent.match(/iPhone/i) || 
				navigator.userAgent.match(/iPad/i)|| 
				navigator.userAgent.match(/iPod/i) || 
				navigator.userAgent.match(/BlackBerry/i)){
								
					isMobile = true;
							
			}
			
			$(document).ready(function(){
			
				/*epic hover plugin
				---------------------*/
				
				$(function() {
				
					$('.thumb').epicHoverFadeZoom({
						 
							overlayColor:'#fff',						//Hex: #xxxx
							fontColor:'#000',							//Hex: #xxxx
							captionDirection:'topToBottom', 			//String: caption slide in/out direction
							opacity: 0.8,								//Integer: 0-1
							transitionSpeed:600,						//Integer: transitions speed, in milliseconds
							easing:'swing',								//String: easing method - see http://jqueryui.com/demos/effect/easing.html
							padding: 0,									//Integer: padding
							mobileActive:false,							//Boolean: whether to activate/deactivate for mobile
							zoom:50										//Integer: zoom factor
						 
					});	
				
				});
				
				/*epic fullscreen plugin
				---------------------*/
				
				/*$(function() {
				
				$('.epicFullscreen').epicFullscreen({
					 
						opacity:0.3,
						background:'#fff',
						pattern:true
					 
					 });	
						
				});*/

			
				/*flex slider
				---------------------*/
			
				//init flex slider
				$('.flexslider').flexslider({
									
						animation: "slide",
						slideDirection: "horizontal",
						slideshow: true,
						slideshowSpeed: 3500,
						animationDuration: 500,
						directionNav: true,
						controlNav: true 
							
				 });
			
			});
			
</script>

</head>
<body onLoad="initialize()">

	<!--background image
	<div class="epicFullscreen">
		<img class="epicImg" src="images/fullscreen-bkg.jpg" alt=""/>
	</div>-->

	<!--start header-->
    <div id="header-wrapper">
    	<div id="header-inner">
        	<header>
            	<div id="logo">
                	<a href="index.html"><img src="images/logo.png" alt="cartel logo" /></a>
              </div>
                
                <!--mobileMenu toggle-->
             	<div class="mobileMenuToggle"><a href=""></a></div>
                
				<nav>
                	<ul class="navigation">
                    	<li><a href="index.html">Work</a></li>
                        <li><a href="about.html">About</a>
                        	<ul class="sub-menu">
                            	<li><a href="#">A sub menu item</a></li>
								<li><a href="#">Another sub menu item</a></li>
								<li><a href="#">And another sub menu item</a></li>
								<li><a href="#">And yet another</a></li>
                                <li><a href="#">And another</a></li>
							</ul>   
                        </li>
                        <li><a href="blog-regular.html">Blog</a>
                        	<ul class="sub-menu">
                            	<li><a href="blog-grid.html">Blog Grid Layout</a></li>
							</ul>   	
                        </li>
                        <li><a class="active" href="contact.html">Contact</a></li>
                         <li><a href="images-captions.html">Styling</a>
                        	<ul class="sub-menu">
                            	<li><a href="images-captions.html">Images & Captions</a></li>
								<li><a href="ui-elements.html">UI Elements</a></li>
								<li><a href="layout.html">Layout Styling</a></li>
							</ul>   
                        </li>
                    </ul>
			  </nav>
              
        	</header>
        </div>
    </div>
    
    <!--start content-->
    <div id="content-wrapper">
    
        <section class="pages clearfix">        
        
        	<!--start section title-->
            <div id="section-title">
            	<h1>Let's Collaborate</h1>
                <h1>Give us a shout</h1>
            </div>
            
        	<!--start content left-->
            <div class="content-inner-left">
            
            	<!--google map-->
				<div id="map_canvas" style="width:100%; height:350px;"></div> 
				
				<h3>Drop us a mail</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
				<form action="php/contact.php" method="post" class="form contactForm" id="contactForm" style="margin-bottom:0;" novalidate="novalidate">
					<p><input type="text" name="contactName" class="required text-field" id="contactName" placeholder="Your Name*" required="required" /></p>
					<p><input type="email" name="contactEmail" class="required text-field" id="contactEmail" placeholder="E-mail*" required="required" /></p>
					<p><input type="text" name="contactSubject" class="text-field" id="contactSubject" placeholder="Subject" /></p>
					<textarea class="required" name="contactMessage" id="contactMessage" rows="32" cols="8" placeholder="Message*" required="required"></textarea>
					<p><span id="msg"><?php echo $msg; ?></span></p>
					<p style="float:left; clear:both; margin-top:10px;"><input type="submit" class="submit submitTheme submitForm" id="submitComment" value="Post Comment" /></p>
				</form>
			</div>
           
                   
			<!--start sidebar-->
			<aside class="sidebar left">
				<ul>
                    <!--widget-text-->
                    <li class="widget_text">
						<h6 class="widgettitle">Our Studio Locations</h6>
						<ul>
							<li><strong>Australia:</strong> +61-256864445</li>
							<li><strong>Brazil:</strong> +81-365547854</li>
							<li><strong>Japan:</strong> +34-665888564</li>
							<li><strong>Mexico:</strong> +52-32584565</li>
                        </ul>
                     </li>
                    <!--widget-text-->
                    <li class="widget_text">
						<h6 class="widgettitle">Text Widget</h6>
						<p>Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. </p>
                     </li>
                      <!--widget-twitter-->
                      <li class="widget_twitter">
                         <h6 class="widgettitle">Twitter Widget</h6>
                         <a class="twitter-timeline" href="https://twitter.com/YOUR_USERNAME" data-widget-id="YOUR_WIDGET_ID" data-link-color="#ff0000" data-chrome="nofooter" data-tweet-limit="1">Tweets by @YOUR_USERNAME</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        
                       </li>
                  </ul>
              </aside>      
            <!--end  content-->
        </section>
    </div>
    <!--start footer-->
    <div id="footer-wrapper">
    	<div id="footer-top" class="clearfix">
        	<footer>
            	<div class="column_one_third column-footer-widget">
                	<div class="widget_text">
                        <div id="footer-logo">
                            <img src="images/logo-common.png" alt="" />
                        </div>
                        <p>Cartel is a fully responsive HTML5 studio template that is ideal for the photographer, designer or studio.</p>
						<p>It boasts a masonry gallery, awesome hover effects, full width sliders with touch support, fullscreen backgrounds, blog layout and tons of professional styling options and captions.</p>
						<p><a href="http://udthemes.com/cartel-html-template/" title="Cartel HTML5 Template by UDTHEMES">Read More.</a></p>
					</div>
                </div>
                <div class="column_one_third column-footer-widget">
                    <div class="widget_twitter">
                    	<h6 class="widgettitle">Ongoing</h6>
                    	<a class="twitter-timeline" href="https://twitter.com/YOUR_USERNAME" data-widget-id="YOUR_WIDGET_ID" data-link-color="#ff0000" data-chrome="nofooter" data-tweet-limit="1">Tweets by @YOUR_USERNAME</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>
                </div>
                <div class="column_one_third column-footer-widget last">
                    <div class="widget_text">
                		<h6 class="widgettitle">Let's Collaborate</h6>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,</p>
                        <p>Tel: +1 55 65 15 45 85/+1 65 98 56 45 45
                        Mail: <a href="">info@cartel.com</a></p>
                    </div>
                </div>
            </footer>
        </div>
        <div id="footer-bottom">
        	<footer>
            	<!--social networks-->
                <ul class="connect">
                    <li><a href=""><span class="flickr"></span>Flickr</a></li>
                    <li><a href=""><span class="dribbble"></span>Dribbble</a></li>
                    <li><a href=""><span class="pinterest"></span>Pinterest</a></li>
                    <li><a href=""><span class="twitter"></span>Twitter</a></li>
                </ul>
                <p class="footer-copyright">&copy; copyright 2013. <a href="http://udthemes.com" title="Premium WordPress Themes - UDTHEMES">UDTHEMES</a>. All Rights Reserved.</p>
            </footer>
        </div>
    </div>
</body>
</html>