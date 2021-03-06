<?php

/*checks whether cookie has been set - 
	- if cookie not set redirect to form page
	- if cookie under age redirect to fail page
	- if over age display welcome message
	*/
	
if (isset($_COOKIE["age"]))
	{
	if ($_COOKIE["age"] == "under") {
 		header('Location: form.php');
	}
	
	/*else if ($_COOKIE["age"] == "over")
	{
		echo "welcome to the over 18 page";
	}*/	}		
	else  header('Location: form.php');

?>



<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if lte IE 9]> <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Splinter Cell - Stop the Blacklist</title>

	<meta property="og:title" content="Splinter Cell - Stop the Blacklist">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Win a gaming PC with Splinter Cell Blacklist">
    <meta property="og:url" content="http://uk-microsites.ign.com/splintercellblacklist/">
    <meta property="og:image" content="http://uk-microsites.ign.com/splintercellblacklist/assets/images/StopTheBlacklist_logo.png">
    <meta property="og:description" content="Win a gaming PC with Splinter Cell Blacklist">
    <meta property="fb:admins" content="546507370">
    
    
	<link rel="shortcut icon" href="favicon.ico">
	<link rel=apple-touch-icon href="apple-touch-icon.png">
	<link rel=apple-touch-icon sizes=72x72 href="apple-touch-icon-72x72.png">
	<link rel=apple-touch-icon sizes=114x114 href="apple-touch-icon-114x114.png">


    <link rel="stylesheet" href="default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="stylesheets/app.css" />

    
    <style>
    #policyNotice,
    #policyNotice p,
    #policyNotice a {
        font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
        font-size: 11px;
        line-height: 11px;
    }
    #policyNotice a,
    #policyNotice a:visited {
        color: #000;
        font-weight:bold;
        text-decoration:none;
    }
    #policyNotice {
        position:fixed;
        z-index: 999;
        padding: 10px 10px 0 10px;
        background-color: #FFFFCE;
        color: #000;
        border: 1px solid #000;
    }
    #policyNotice p {
        margin: 0 0 11px 0;
        padding: 0;
    }
    #policyNotice .close-btn {
        position: relative;
        padding: 4px;
        top: -5px;
        right: -8px;
        float:right;
        text-align: center;
    }
    #policyNotice .close-btn a,
    #policyNotice .close-btn a:visited {
        font-size: 14px;
        color: #BA0D0D;
        text-decoration: none;
        font-weight:normal;
    }
    #policyNotice a:hover {
        text-decoration: underline;
    }
    
    #policyNotice {
        width: 800px;
        bottom: 2px;
        left: 50%;
        margin-left: -400px;
    }
    </style>


    <script src="javascripts/vendor/custom.modernizr.js"></script>

	<!--[if gte IE 9]>
	  <style type="text/css">
	    .gradient {
	       filter: none;
	    }
	  </style>
	<![endif]-->



</head>
<body>
    
<div id="policyNotice" style="display:none">
    <div class="close-btn">
        <a href="#" title="Close" data-domain=".ign.com">Close</a>
    </div>
    <p>We use cookies and other technologies to improve your online experience. By using this Site, you consent to this use as described in our <a href="http://corp.ign.com/policies/cookie-eu" target="_blank">Cookie Policy</a>.</p>
</div>

<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<section id="hex" data-type="background" data-speed="2"></section>
<section id="hex_2" data-type="background" data-speed="6"></section>
<section id="hex_3" data-type="background" data-speed="10"></section>


<article>
    <header>
		<div id="ignHeader" class="clear">
			<ul class="social-btns">
	                <li>
	                    <div class="fb-like" data-href="http://uk-microsites.ign.com/splintercellblacklist/" data-send="false" data-layout="button_count" data-width="60" data-show-faces="false"></div>
	                </li>

	                <li><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://uk-microsites.ign.com/splintercellblacklist/" data-text="" data-via="IGNUK">Tweet</a></li>

	                <!-- <li>
	                    <div class="g-plusone" data-size="tall" data-annotation="none" data-href="http://uk-microsites.ign.com/splintercellblacklist/"></div>
	                </li> -->
	            </ul>
				
				<div id="ignHeader-userBar">
					<div class="container"> <a id="ignHeader-logo" href="http://uk.ign.com/"></a>
					</div>
				</div>

		</div>

        <nav id="nav" class="fixedNav">
            <div class="row">
                <ul class="large-12 columns">
                    <li data-pos="the_game" class="the_game"><a href="#_" onClick="_gaq.push(['_trackEvent', 'navigation', 'clicked', 'stop the blacklist'])">STOP THE BLACKLIST</a></li>
<!--                     <li data-pos="weapons" class="weapons"><a href="#_" onClick="_gaq.push(['_trackEvent', 'navigation', 'clicked', 'gadgets'])">GADGETS</a></li> -->
                    <li data-pos="screenshots" class="screenshots"><a href="#_" onClick="_gaq.push(['_trackEvent', 'navigation', 'clicked', 'screenshots'])">SCREENSHOTS</a></li>
                    <li class="logo"><a href="http://splintercell.ubi.com/blacklist/en-GB/home/index.aspx"><img src="assets/images/blacklist_logo.png" alt="Splinter Cell Blacklist Logo"/></a></li>
                    <li data-pos="scbl" class="scbl"><a href="#_" onClick="_gaq.push(['_trackEvent', 'navigation', 'clicked', 'splinter cell blacklist'])">SPLINTER CELL BLACKLIST</a></li>
                    <li class="preorder"><a href="http://www.game.co.uk/webapp/wcs/stores/servlet/HubArticleView?hubId=170494&articleId=170495&catalogId=10201&langId=44&storeId=10151" onClick="_gaq.push(['_trackEvent', 'navigation', 'clicked', 'pre-order nav'])">PRE-ORDER</a></li>
                </ul>
                <a href="http://www.game.co.uk/webapp/wcs/stores/servlet/HubArticleView?hubId=170494&articleId=170495&catalogId=10201&langId=44&storeId=10151" onClick="_gaq.push(['_trackEvent', 'navigation', 'clicked', 'pre-order nav'])"><span id="preorder" class="pre-order_btn"></span></a>
            </div>
        </nav>
	</header>
    
    <!--top instructional section-->
	<section class="content instructional">
		<div class="row">
			<div class="large-12 columns">
				<img src="assets/images/stb_logo.png" alt="Beat The Blacklist Logo">
				<img class="sam" src="assets/images/sam.png" alt="Sam Fisher">
				<div class="holder_instructional">
					<h3 class="tango">JOIN THE ELITE RANKS OF THE FOURTH ECHELON</h3>
					<p>Solve one of the four intel puzzles dropping every Monday over the next four weeks, and you’ll be entered into our grand prize draw for the chance to win weekly spot prizes or our top prize of a <b><a href="http://bit.ly/135l9bf" target="_blank" style="color: #77C9BC;">PC Specialist gaming PC powered by Nvidia GeForce GTX 780</a></b>.
				    <br>Click the <span style="color: #AECD57;">green marker</span> on the West Coast of the USA to select your first mission...</p>
                </div>
			</div>
		</div>
	</section>
    <!--end instructional section-->

    <!--flash component section-->
    <section class="content flash_wrapper" id="flash_wrapper" >
        <div class="large-12 columns">

            <div class="btb_game">
                <div class="btb_holder"><object width="950" height="650" data="http://btb.ubisoft.uk.com/"></object></div>
            </div>

        </div>
    </section>
    <!--end flash component section-->

    <!--weapons section-->
  <!--   <section class="content weapons" data-type="background" data-speed="2" id="weapons">
     <div class="row">
        <div class="large-12 columns">
            <h2 class="black">GADGETS</h2>

            <h3>CHOOSE A GADGET:</h3>
			<div class="file_cont names">
				<div class="name folder_5"><a href="#_">STICKY NOISEMAKER</a></div>
                <div class="name folder_1"><a href="#_">EMP</a></div>
                <div class="name folder_2"><a href="#_">TRIROTOR</a></div>
                <div class="name folder_3"><a href="#_">GOGGLES</a></div>
                <div class="name folder_4"><a href="#_">STICKY CAM</a></div>
			</div>


        	<div class="file_cont">
				<div class="file folder_1"><img src="assets/gadgets/EMP.png" alt="EMP" ></div>
				<div class="file folder_2"><img src="assets/gadgets/TRIROTOR.png" alt="TRIROTOR" ></div>
				<div class="file folder_3"><img src="assets/gadgets/GOGGLES.png" alt="GOGGLES" ></div>
				<div class="file folder_4"><img src="assets/gadgets/STICKY_CAM.png" alt="STICKY CAM" ></div>
				<div class="file folder_5"><img src="assets/gadgets/STICKY_NOISEMAKER.png" alt="STICKY NOISEMAKER"></div>
			</div>

			<div id="final_gadg-cont">
				<div class="web"><img src="assets/images/web.png" alt="web"></div>
				<div class="libya"><span>EMP</span></div>
				<div class="big_folder"><img src="value" alt="" ></div>
				
				<a id="close"><span></span> CLOSE</a>

				<div data-name="EMP" class="gadget_info hidden">
					<h4>RECON &amp; DISTRACTION</h4>
					<p>Sticks to walls and delivers a localized electromagnetic pulse, disabling lights and Security Systems nearby. Use it to create Shadow paths to hide from hostiles, or target Power Boxes near laser trip wires to shut them down. Hostiles are unaffected by the pulse, but will investigate when they see lights shutting off.</p>
				</div>
				
				<div data-name="TRIROTOR" class="gadget_info hidden">
					<h4>RECON &amp; DISTRACTION</h4>
					<p>A remote-pilotable flying drone that fires Sticky Shocker darts. Its rotors can be heard by hostiles if you fly too close.</p>
                    <p>Use the Tri-Rotor to:<br>
                   Scout out areas and Mark hostiles, or attract enemies.</p>
                    <p>Upgrade to gain the ability Self-Destruct and emit sonar pulses. Sonar is unavailable in Perfectionist or near Drone Operators. Drone Operators cannot jam the Tri-Rotor’s main video frequency.</p>
                </div>
				
				<div data-name="GOGGLES" class="gadget_info hidden">
					<h4>VISION MODES</h4>
					<p>Goggles let you see things you otherwise can’t. By default, your Goggles offer Night Vision mode, so you can see clearly while hidden in the shadows. Buy more advanced goggles to add Sonar Vision mode.</p>
					<h4>SONAR VISION</h4>
					<p>Sonar goggles periodically emit a supersonic pulse to detect hostiles behind walls. They can also detect Mines and Security Systems. Upgrade your Sonar Goggles to increase their range and sensitivity. On Perfectionist difficulty, Sonar Goggles cannot see through walls.</p>
				</div>
				
				<div data-name="STICKY CAM" class="gadget_info hidden">
					<h4>RECON &amp; DISTRACTION</h4>
					<p>A remote camera that can be thrown onto walls or other surfaces to offer a second set of eyes. Use it to watch your own back, or scout from new vantage points. Once upgraded, the camera can also Self-Destruct to stun or kill nearby hostiles.</p>
				</div>
				
				<div data-name="STICKY NOISEMAKER" class="gadget_info hidden">
					<h4>RECON &amp; DISTRACTION</h4>
					<p>Use it to create an opening to slip through patrols, or lure hostiles into a trap. This tiny speaker can be thrown onto walls and surfaces to distract guards from their posts.</p>
				</div>
			</div>

        </div>
    </section> -->
    <!--end weapons section-->

    <!--screenshot section-->
    <section class="content screenshots" data-type="background" data-speed="2" id="screenshots">
    	<div class="row">
        <div class="large-12 columns">
        	<h2>SPLINTER CELL BLACKLIST SCREENSHOTS</h2>

            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <img src="assets/carousel_images/slide_10.jpg" data-thumb="assets/carousel_images/slide_10.jpg" alt="" />
                    <img src="assets/carousel_images/slide_11.jpg" data-thumb="assets/carousel_images/slide_11.jpg" alt="" />
                    <img src="assets/carousel_images/slide_14.jpg" data-thumb="assets/carousel_images/slide_14.jpg" alt="" />
                    <img src="assets/carousel_images/slide_1.jpg" data-thumb="assets/carousel_images/slide_1.jpg" alt="" />
                    <img src="assets/carousel_images/slide_2.jpg" data-thumb="assets/carousel_images/slide_2.jpg" alt="" />
                    <img src="assets/carousel_images/slide_3.jpg" data-thumb="assets/carousel_images/slide_3.jpg" alt="" />
                    <img src="assets/carousel_images/slide_4.jpg" data-thumb="assets/carousel_images/slide_4.jpg" alt="" />
                    <img src="assets/carousel_images/slide_5.jpg" data-thumb="assets/carousel_images/slide_5.jpg" alt="" />
                    <img src="assets/carousel_images/slide_6.jpg" data-thumb="assets/carousel_images/slide_6.jpg" alt="" />
                    <img src="assets/carousel_images/slide_7.jpg" data-thumb="assets/carousel_images/slide_7.jpg" alt="" />
                    <img src="assets/carousel_images/slide_8.jpg" data-thumb="assets/carousel_images/slide_8.jpg" alt="" />
                    <img src="assets/carousel_images/slide_9.jpg" data-thumb="assets/carousel_images/slide_9.jpg" alt="" />
                    <img src="assets/carousel_images/slide_12.jpg" data-thumb="assets/carousel_images/slide_12.jpg" alt="" />
                    <img src="assets/carousel_images/slide_13.jpg" data-thumb="assets/carousel_images/slide_13.jpg" alt="" />
                    <img src="assets/carousel_images/slide_15.jpg" data-thumb="assets/carousel_images/slide_15.jpg" alt="" />
                    <img src="assets/carousel_images/slide_16.jpg" data-thumb="assets/carousel_images/slide_16.jpg" alt="" />
                    <img src="assets/carousel_images/slide_17.jpg" data-thumb="assets/carousel_images/slide_17.jpg" alt="" />
                    <img src="assets/carousel_images/slide_18.jpg" data-thumb="assets/carousel_images/slide_18.jpg" alt="" />
                </div>
            </div>
            
        </div>
      </div>
    </section>
    <!--end screenshot section-->

    <!--about section-->
    <section class="content the_game" id="the_game">
    	<div class="row">
        	<div class="large-12 columns">
            	<div class="about_container">
            		
            		<h2>SPLINTER CELL BLACKLIST<span></span></h2>
            		<div class="empty_block">
                        <span class="full_block"></span>
                    </div>

<h3>About the Game</h3>

 

<h4>The Blacklist</h4>

<p>The United States has a military presence in two-thirds of countries around the world. Some of them have had enough. A group of terrorists calling themselves The Engineers initiate a terror ultimatum called the Blacklist – a deadly countdown of escalating attacks on US interests at home and abroad, which forces the President of the United States to assemble a covert operation, the Fourth Echelon, to stop the impending attacks and find out who is responsible.</p>

 

<h4>Fourth Echelon</h4>

<p>The Fourth Echelon operates aboard its mobile HQ, a heavily outfitted and customisable stealth airliner; “The Paladin”, and is led by Sam Fisher, a man who is equal parts shadow operative, combat specialist and black-ops legend. To facilitate his fight against the Engineers, the President has granted Fisher granted the Fifth Freedom; which permits implicit freedom to do whatever it takes to defend the United States; even breaking the law.</p>

 

<h4>Choose your Playstyle</h4>

<p>Splinter Cell Blacklist builds on the stealth roots of the franchise, while exploring new directions to embrace the realms of action and adventure. Players can define their personal play styles and be rewarded for those choices. <span class="highlight">GHOST</span> players want to remain undetected. <span class="highlight">ASSAULT</span> players rely on instincts and firepower to deal with a situation. <span class="highlight">PANTHER</span> players strike lethally from the shadows in the most efficient and deadly way.<br>What kind of Splinter Cell are you?</p>

 

<h4>Multiple Game Modes</h4>

<p>Control the entire game experience from the Strategic Mission Interface (SMI) and dynamically switch from epic Single Player missions across into Co-Operative missions with a buddy or AI partner and then into the Adversarial Multiplayer Spies vs Mercs Mode.</p>

            		<div class="pre-order_section">
            			<img class="logo" src="assets/images/sc_logo-pre-order.png" alt="">
            			<div class="clearfix"></div>
            			<a href="http://www.game.co.uk/webapp/wcs/stores/servlet/HubArticleView?hubId=170494&articleId=170495&catalogId=10201&langId=44&storeId=10151" target="_blank" onClick="_gaq.push(['_trackEvent', 'pre-order', 'clicked', 'pre-order bottom btn'])"><img src="assets/images/special_packshots.png" alt=""></a>
            			<a href="http://www.game.co.uk/webapp/wcs/stores/servlet/HubArticleView?hubId=170494&articleId=170495&catalogId=10201&langId=44&storeId=10151" target="_blank" onClick="_gaq.push(['_trackEvent', 'pre-order', 'clicked', 'pre-order bottom btn'])"><img class="sc_button" src="assets/images/pre_order-game.png" alt=""></a>
            			<a href="http://www.game.co.uk/webapp/wcs/stores/servlet/HubArticleView?hubId=170494&articleId=170495&catalogId=10201&langId=44&storeId=10151" target="_blank" onClick="_gaq.push(['_trackEvent', 'pre-order', 'clicked', 'pre-order bottom btn'])"><img class="game_packs" src="assets/images/game_packshots.png" alt=""></a>
            		</div>
            	</div>
        	</div>
    	</div>
    </section>
    <!--end about section-->

    <!--site footer-->

    <footer>
        <div class="top_btn"><a href="#_">TOP</a></div>
        <div class="row">sc
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
    
  <!--script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
  '.js><\/script>')
  </script-->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  
	<script src="javascripts/waypoints.min.js"></script>
	
	<script src="javascripts/waypoints-sticky.min.js"></script>
	
	<script src="javascripts/scrollTo.js"></script>

    <script type="text/javascript" src="javascripts/vendor/jquery.nivo.slider.js"></script>
	
  
  <!--script>
    $(document).foundation();
  </script-->

  <script>

  // function removeActive(){
  //   $('#nav').find('.active').removeClass('active');
  // }

  // $('#flash_wrapper').waypoint(function() {
  //       removeActive();
  //       $('#nav').find('.the_game').addClass('active');
  //   });

  //   $('#weapons').waypoint(function() {
  //       removeActive();
  //       $('#nav').find('.weapons').addClass('active');
  //   });

  //   $('#screenshots').waypoint(function() {
  //       removeActive();
  //       $('#nav').find('.screenshots').addClass('active');
  //   });

  //   $('#the_game').waypoint(function() {
  //       removeActive();
  //       $('#nav').find('.scbl').addClass('active');
  //   });
	
	
  	//code for switch backgrounds on nav items
  	$(document).ready(function(){
		
		$('.fixedNav').waypoint('sticky');

  		$('nav').on('click', 'li', function(){
  			
  			var $this = $(this);

  			$('nav').find('.active').removeClass('active');

  			if($this.hasClass('logo') !== true) {

  				$this.addClass('active');

  			}
  		
  		});

  	});


    $(window).load(function() {
        $('#slider').nivoSlider({
        	effect: 'boxRainReverse', 
	        boxCols: 10, 
	        boxRows: 8, 
	        pauseTime: 6000,
	        pauseOnHover: true, 
        	manualAdvance: true 
        });
    });


    $(document).ready(function(){
        $('section[data-type="background"]').each(function(){
            var $bgobj = $(this); // assigning the object
         
            $(window).scroll(function() {
                var yPos = -($(window).scrollTop() / $bgobj.data('speed')); 
                 
                // Put together our final background position
                var coords = '50% '+ yPos + 'px';
     
                // Move the background
                $bgobj.css({ backgroundPosition: coords });
            }); 
        });

        $('section#debris_3').each(function(){
            var $bgobj = $(this); // assigning the object
         
            $(window).scroll(function() {
                var yPos = 400-($(window).scrollTop() / $bgobj.data('speed')); 
                 
                // Put together our final background position
                var coords = '50% '+ yPos + 'px';
     
                // Move the background
                $bgobj.css({ backgroundPosition: coords });
            }); 
        });      
    });

  </script>


  <script>



  $(document).ready(function(){
	  
	  
	  
	  $('#nav').find('li').on('click', function(){

	    var x = $(this).attr('data-pos');

	    if(x == 'the_game') {
		  $.scrollTo( ($('#flash_wrapper').offset().top-10), 800, {easing:'swing'});
	    } else if (x == 'weapons') {
	      $.scrollTo( ($('#weapons').offset().top-70), 800, {easing:'swing'});
	    } else if (x == 'screenshots') {
	      $.scrollTo( ($('#screenshots').offset().top-70), 800, {easing:'swing'});
	    } else if (x == 'scbl'){
	      $.scrollTo( ($('#the_game').offset().top-70), 800, {easing:'swing'});
	    }

	    console.log('scrolling to >>> ' + x);

	  });

	  $('.top_btn').find('a').on('click', function(){

	    $.scrollTo( '#ignHeader', 800, {easing:'swing'});

	  });


  	function spin(cName){

  	      var elems = document.getElementsByClassName(cName);

	      var increase = Math.PI * 2 / elems.length;
	      var x = 0, y = 0, angle = 0;

	      for (var i = 0; i < elems.length; i++) {
	          var elem = elems[i];
	          // modify to change the radius and position of a circle
	          x = 200 * Math.cos(angle) + 100;
	          y = 200 * Math.sin(angle) + 100;
	          elem.style.position = 'absolute';
	          elem.style.left = x + 'px';
	          elem.style.top = y + 'px';
	          //need to work this part out
	          var rot = 90 + (i * (360 / elems.length));

	          angle += increase;
	          console.log(angle);
	      }

  	}

  	spin('file');


  //animate direction
	 // $('.name').mouseover(function(){

	 //    var fileNum = $(this).attr('class').charAt(12);


	 //  });

	 //   $('.name').mouseout(function(){

	 //        var fileNum = $(this).attr('class').charAt(12);

	 //  });
	  
	  var parDiv = $('#final_gadg-cont');
	  
	  $('#close').hide();

	  $('.name').on('click', 'a', function(){

        //remove styling classes
        $('.libya').removeClass('sticky');
        $('.big_folder').removeClass('goggles');

	  	var gadget = $('#weapons').find('.active').attr('src');
	  	var gadgName = $(this).text();

	  	 _gaq.push(['_trackEvent', 'gadget', 'clicked', gadgName]);

	    $('.file_cont').animate({ opacity: 0}, function(){
	    	$(this).hide();
	    });
	    parDiv.find('.big_folder').children().attr('src', gadget).end().show().delay(300).animate({ opacity: 1 });
        $('#weapons').find('h3').animate({ opacity: 0 });
	    parDiv.find('.libya').children().text(gadgName).end().show().delay(300).animate({ opacity: 1, top: 100 });
	    parDiv.find('.web').show().delay(300).animate({ opacity: 1}, 200);
		$('#close').show().animate({opacity: 1}, 200); 
		
		parDiv.find("[data-name='" + gadgName + "']").removeClass('hidden').animate({ opacity: 1, bottom: 0});

        if(gadgName == 'STICKY NOISEMAKER') {
            $('.libya').addClass('sticky');
        } else if(gadgName == 'GOGGLES') {
            $('.big_folder').addClass('goggles');
        }
		
	  });
	  
	  
	  
	  function findLabel(elem){
		  var folderName = elem.attr('class');
		  var lastChar = folderName.slice(-1);
		  
		  return lastChar;
	  }
	  
	  $('.name').mouseover(function(){	  
		 
		  var lastChar = findLabel($(this));

          $(this).find('a').stop().animate({ opacity : 1 }, 200);  

          console.log(lastChar);
          $('.file').find('img').stop().animate({ opacity : 0.3 }, 600);
		  $('.file.folder_' + lastChar).find('img').addClass('active').stop().animate({ opacity : 1 }, 200);  

	  });
	  
	  $('.name').mouseout(function(){

          $(this).find('a').stop().animate({ opacity : 0.6 }, 200);  
		  
		  var lastChar = findLabel($(this));	  
		  $('.file.folder_' + lastChar).find('img').removeClass('active').stop().animate({ opacity : 0.3 }, 800);  

	  });

      $('.names').mouseout(function(){  
            $('.file').find('img').stop().animate({ opacity : 1 }, 600);
      });

	  parDiv.on('click', '#close', function(){
		   
	    parDiv.find('.big_folder').animate({ opacity: 0}, function(){ $(this).hide(); });
	    $('.file_cont').show().delay(300).animate({ opacity: 1 }, 1000);
        $('#weapons').find('h3').animate({ opacity: 1 });
	    parDiv.find('.libya').animate({ opacity: 0, top: 60 }, function(){ $(this).hide(); });
	    parDiv.find('.web').delay(300).animate({ opacity: 0}, 50, function(){ $(this).hide(); });
		$('#close').animate({opacity: 0}, 200, function(){
			$(this).hide();
		});
		
		parDiv.find('.gadget_info').delay(200).animate({ opacity: 0, bottom: 50}, function(){
			$(this).addClass('hidden');
		});
		
	  });
});

  </script>

    <script>

    (function(){
        var cookieName = 'persist-policy';
        var cookieValue = 'eu';
        var createCookie = function(name,value,days,domain) {
            var expires = '';
            var verifiedDomain = '';
            if (days) {
                var date = new Date();
                date.setTime(date.getTime()+(days*24*60*60*1000));
                expires = '; expires='+date.toGMTString();
            }
            if (domain) {
                verifiedDomain = '; domain='+domain;
            }
            document.cookie = name+'='+value+expires+verifiedDomain+'; path=/';
        };
        var readCookie = function(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        };
        window.initPolicyWidget = function(){
            jQuery('#policyNotice').show().find('.close-btn a').click(function(e){
                createCookie(cookieName, cookieValue, 180, jQuery(this).data('domain'));
                jQuery('#policyNotice').remove();
                return false;
            });
        }
        var cookieContent = readCookie(cookieName);
        if (typeof  cookieContent === 'undefined' || cookieContent != cookieValue) {
            jQuery(document).ready(initPolicyWidget);
            jQuery(document).trigger('policyWidgetReady');
        }
    })();
    </script>
    
  <!--begin GA script-->
  <script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-15279170-1']);
	  _gaq.push(['_trackPageview', 'splinter-cell']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	  
	</script>
	<!--end GA script-->

  
  <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=147333065402611";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
	<!--script type="text/javascript">
	  window.___gcfg = {lang: 'en-GB'};
	
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script-->

  <!-- Begin comScore Tag -->
	<script>
	  var _comscore = _comscore || [];
	  _comscore.push({ c1: "2", c2: "3000068" });
	  (function() {
	    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
	    s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
	    el.parentNode.insertBefore(s, el);
	  })();
	</script>
<!-- 	<noscript>
	  <img src="http://b.scorecardresearch.com/p?c1=2&c2=3000068&cv=2.0&cj=1" />
	</noscript> -->
   <!-- End comScore Tag -->
   <!--
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
-->

    <!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
        $(window).load(function() { // makes sure the whole site is loaded
            $("#status").fadeOut(); // will first fade out the loading animation
            $("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
        })
    //]]>
</script>
</body>
</html>
