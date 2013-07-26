<?php
setcookie("age", "under");
?>


<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if lte IE 9]> <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Hub template</title>

	<!-- Included CSS Files -->
    <link rel="stylesheet" href="stylesheets/app.css" />

    <script src="javascripts/vendor/custom.modernizr.js"></script>
	<SCRIPT type="text/javascript">
	    window.history.forward();
	    function noBack() { window.history.forward(); }
	</SCRIPT>
    
	<!--[if gte IE 9]>
	  <style type="text/css">
	    .gradient {
	       filter: none;
	    }
	  </style>
	<![endif]-->

</head>
<body class="age_gate"  onload="noBack();"
    onpageshow="if (event.persisted) noBack();" onunload="">
	
	<section id="hex"></section>
	<section id="hex_2"></section>
	<section id="hex_3"></section>
	
	
<article>	
	<header id="ignHeaderHeader">
		<div id="ignHeader" class="clear">

				
				<div id="ignHeader-userBar">
					<div class="container"> <a id="ignHeader-logo" href="./"></a>
					</div>
				</div>

		</div>
        <nav id="nav" class="fixedNav">
            <div class="row">
                <ul class="large-12 columns">
                    <li data-pos="the_game"></li>
                    <li data-pos="weapons"></li>
                    <li class="logo"><a href="#_"><img src="assets/images/blacklist_logo.png" alt="Splinter Cell Blacklist Logo"/></a></li>
                    <li data-pos="screenshots"></li>
                    <li data-pos="preorder"></li>
                </ul>
            </div>
        </nav>
	</header>

	<img src="assets/images/stb_logo.png" alt="Beat The Blacklist Logo" class="btb_logo">
	
    <div id="sc_form-container" class="row">
        <div class="large-12 columns">
            <form class="shadow" action="#" method="post" onsubmit="return validateForm();" name="age_check" onkeypress="return numbersOnly(event);">
            <h3>SORRY, WE ARE NOT ABLE TO LET YOU VIEW THIS CONTENT.</h3>
              
              </form>
        </div>
    </div>

    <!--site footer-->

    <footer>
        <div class="top_btn"><a href="#_">TOP</a></div>
        <div class="row">
            <div class="large-12 columns">
                <img class="logos" src="assets/images/logos.jpg" alt="All logos" />

                <p class="small_text">© 2002–2013 Ubisoft Entertainment. All Rights Reserved. Tom Clancy’s, Splinter Cell, Blacklist, Sam Fisher, the Soldier Icon, Ubisoft, and the Ubisoft logo are trademarks of Ubisoft Entertainment in the US and/or other countries. 
KINECT, Xbox, Xbox 360, Xbox LIVE, and the Xbox logos are trademarks of the Microsoft group of companies and are used under license from Microsoft. “PlayStation” and “PS3” are trademarks or registered trademarks of Sony Computer Entertainment Inc. WiiU is a trademark of Nintendo. © 2012 Nintendo. </p>
                
            </div>
        </div>
    </footer>
    <!--end site footer-->

    
    <!-- start footer -->    
    <div id="ign_footer">
        <div class="ign-elements">
            <div class="row">
                <section class="large-6 columns">
                    <p class="corp-terms">Copyright 2013 <span class="white">IGN Entertainment UK, Inc.</span><br>
                     <a href="http://corp.ign.com/privacy.html" title="Privacy Policy">Privacy Policy</a> | <a href="http://corp.ign.com/user-agreement.html" title="User Agreement">User Agreement</a></p>
                </section>
                <section class="large-6 columns right">
                    <p class="corp-links"><a href="http://uk.corp.ign.com/#about" title="About Us">About Us</a> | <a href="http://uk.corp.ign.com/#contact" title="Contact Us">Contact Us</a> | <a href="http://corp.ign.com/feeds.html" title="RSS Feeds">RSS Feeds</a></p>
                </section>
              </div>
        </div>
    </div>
    <!--end footer-->
</article>
</body>
</html>