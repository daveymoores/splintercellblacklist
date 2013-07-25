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

	<title>Hub template</title>

	<meta property="og:title" content="SITENAME">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="">
    <meta property="og:url" content="NEWURLPLEASE">
    <meta property="og:image" content="">
    <meta property="fb:admins" content="546507370">
    
    
	<link rel="shortcut icon" href="favicon.ico">
	<link rel=apple-touch-icon href="apple-touch-icon.png">
	<link rel=apple-touch-icon sizes=72x72 href="apple-touch-icon-72x72.png">
	<link rel=apple-touch-icon sizes=114x114 href="apple-touch-icon-114x114.png">


    <link rel="stylesheet" href="default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="stylesheets/app.css" />


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
<!-- <section id="debris" data-type="background" data-speed="2"></section>
<section id="debris_2" data-type="background" data-speed="6"></section>
<section id="debris_3" data-speed="10"></section> -->
<section id="hex" data-type="background" data-speed="2"></section>
<section id="hex_2" data-type="background" data-speed="6"></section>
<section id="hex_3" data-type="background" data-speed="10"></section>

<!--particles-->
<!-- <section id="particle" data-type="background" data-speed="2"></section>
<section id="particle_2" data-type="background" data-speed="6"></section>
<section id="particle_3" data-type="background" data-speed="10"></section> -->
<!--end particles-->

<article>
    <header>
		<div id="ignHeader" class="clear">
			<ul class="social-btns">
	                <li>
	                    <div class="fb-like" data-href="NEWURLPLEASE" data-send="false" data-layout="button_count" data-width="60" data-show-faces="false"></div>
	                </li>

	                <li><a href="https://twitter.com/share" class="twitter-share-button" data-url="NEWURLPLEASE" data-text="" data-via="IGNUK">Tweet</a></li>

	                <li>
	                    <div class="g-plusone" data-size="tall" data-annotation="none" data-href="NEWURLPLEASE"></div>
	                </li>
	            </ul>
				
				<div id="ignHeader-userBar">
					<div class="container"> <a id="ignHeader-logo" href="http://uk.ign.com/"></a>
					</div>
				</div>

		</div>

        <nav>
            <div class="row">
                <ul class="large-12 columns">
                    <li><a href="#_">THE GAME</a></li>
                    <li class="active"><a href="#_">WEAPONS</a></li>
                    <li class="logo"><a href="#_"><img src="assets/images/blacklist_logo.png" alt="Splinter Cell Blacklist Logo"/></a></li>
                    <li><a href="#_">SCREENSHOTS</a></li>
                    <li><a href="#_">PRE-ORDER</a></li>
                </ul>
                <a href="#_"><span class="pre-order_btn"></span></a>
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
					<h3 class="tango">ARE YOU SMART ENOUGH TO JOIN THE ELITE RANKS OF THE <br>FOURTH ECHELON?</h3>
					<p>Prove your mental acuity by solving one of our four intel puzzles over the next month and you’ll <br>be entered into our grand prize draw to win a weekly spot prize <br>or even a [TOP PRIZE].</p>
				</div>
			</div>
		</div>
	</section>
    <!--end instructional section-->

    <!--flash component section-->
    <section class="content flash_wrapper">
        <div class="large-12 columns">

            <div class="btb_game">
                <div class="btb_holder"><object width="950" height="650" data="http://btb.ubisoft.uk.com/"></object></div>
            </div>

        </div>
    </section>
    <!--end flash component section-->

    <!--weapons section-->
    <section class="content weapons" data-type="background" data-speed="2">
     <div class="row">
        <div class="large-12 columns">
            <h2 class="black">GADGETS</h2>


			<div class="file_cont">
				<div class="name folder_1"><a href="#_">EMP</a></div>
				<div class="name folder_2"><a href="#_">TRIROTOR</a></div>
				<div class="name folder_3"><a href="#_">GOGGLES</a></div>
				<div class="name folder_4"><a href="#_">STICKY CAM</a></div>
				<div class="name folder_5"><a href="#_">STICKY NOISEMAKER</a></div>
			</div>


        	<div class="file_cont">
				<div class="file folder_1"><img src="assets/gadgets/EMP.png" alt="EMP" ></div>
				<div class="file folder_2"><img src="assets/gadgets/TRIROTOR.png" alt="TRIROTOR" ></div>
				<div class="file folder_3"><img src="assets/gadgets/GOGGLES.png" alt="GOGGLES" ></div>
				<div class="file folder_4"><img src="assets/gadgets/STICKY_CAM.png" alt="STICKY-CAM" ></div>
				<div class="file folder_5"><img src="assets/gadgets/STICKY_NOISEMAKER.png" alt="STICKY-NOISEMAKER" ></div>
			</div>

			<div id="final_gadg-cont">
				<div class="web"><img src="assets/images/web.png"></div>
				<div class="libya"><span>EMP</span></div>
				<div class="big_folder"><img src="" alt="" ></div>

				<div data-name="EMP" class="gadget_info hidden">
					<h4>RECON &amp; DISTRACTION</h4>
					<p>Sticks to walls and delivers a localized electromagnetic pulse, disabling lights and Security Systems nearby. Use it to create Shadow paths to hide from hostiles, or target Power Boxes near laser trip wires to shut them down. Hostiles are unaffected by the pulse, but will investigate when they see lights shutting off.</p>
				</div>
				
				<div data-name="TRIROTOR" class="gadget_info hidden">
					<h4>RECON &amp; DISTRACTION</h4>
					<p>A remote-pilotable flying drone that fires Sticky Shocker darts. Its rotors can be heard by hostiles if you fly too close.</p>
<p>Use the Tri-Rotor to:<br>
Scout out areas and Mark hostiles, or attract enemies.</p>
<p>Upgrade to gain the ability Self-Destruct and emit sonar pulses
Sonar is unavailable in Perfectionist or near Drone Operators. Drone Operators cannot jam the Tri-Rotor’s main video frequency.</p>
					
				</div>
				
				<div data-name="GOGGLES" class="gadget_info hidden">
					<h4>VISION MODES</h4>
					<p>Goggles let you see things you otherwise can’t. By default, your Goggles offer Night Vision mode, so you can see clearly while hidden in the shadows. Buy more advanced goggles to add Sonar Vision mode.</p>
					<h4>SONAR VISION</h4>
					<p>Sonar goggles periodically emit a supersonic pulse to detect hostiles behind walls. They can also detect Mines and Security Systems. Upgrade your Sonar Goggles to increase their range and sensitivity. On Perfectionist difficulty, Sonar Goggles cannot see through walls.</p>
				</div>
				
				<div data-name="STICKY-CAM" class="gadget_info hidden">
					<h4>RECON &amp; DISTRACTION</h4>
					<p>A remote camera that can be thrown onto walls or other surfaces to offer a second set of eyes. Use it to watch your own back, or scout from new vantage points. Once upgraded, the camera can also Self-Destruct to stun or kill nearby hostiles.</p>
				</div>
				
				<div data-name="STICKY-NOISEMAKER" class="gadget_info hidden">
					<h4>RECON &amp; DISTRACTION</h4>
					<p>Use it to create an opening to slip through patrols, or lure hostiles into a trap. This tiny speaker can be thrown onto walls and surfaces to distract guards from their posts.</p>
				</div>
			</div>

        </div>
    </section>
    <!--end weapons section-->

    <!--screenshot section-->
    <section class="content screenshots" data-type="background" data-speed="2">
    	<div class="row">
        <div class="large-12 columns">
        	<h2>SCREENSHOTS</h2>

            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <img src="assets/carousel_images/slide_1.jpg" data-thumb="assets/carousel_images/slide_1.jpg" alt="" />
                    <img src="assets/carousel_images/slide_2.jpg" data-thumb="assets/carousel_images/slide_2.jpg" alt="" />
                    <img src="assets/carousel_images/slide_3.jpg" data-thumb="assets/carousel_images/slide_3.jpg" alt="" />
                    <img src="assets/carousel_images/slide_4.jpg" data-thumb="assets/carousel_images/slide_4.jpg" alt="" />
                    <img src="assets/carousel_images/slide_5.jpg" data-thumb="assets/carousel_images/slide_5.jpg" alt="" />
                    <img src="assets/carousel_images/slide_6.jpg" data-thumb="assets/carousel_images/slide_6.jpg" alt="" />
                    <img src="assets/carousel_images/slide_7.jpg" data-thumb="assets/carousel_images/slide_7.jpg" alt="" />
                </div>
            </div>
            
        </div>
      </div>
    </section>
    <!--end screenshot section-->

    <!--about section-->
    <section class="content the_game">
    	<div class="row">
        	<div class="large-12 columns">
            	<div class="about_container">
            		
            		<h2>ABOUT THE GAME</h2>
            		<span class="empty_block"><span class="full_block"></span></span>

            		<p>The United States has a military presence in two thirds of the countries around the world. A group of 12 have had enough and initiate a terror ultimatum called the Blacklist – a deadly countdown of escalating terrorist attacks on US interests. Sam Fisher is the leader of the newly formed Fourth Echelon unit: a clandestine unit that answers solely to the President of the United States. Sam and his team must hunt down these terrorists by any means necessary, and stop the Blacklist countdown before it reaches zero.</p>
            		<br>
            		<p>A load of secondary info that relates to ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>

            		<div class="pre-order_section">
            			<img class="logo" src="assets/images/sc_logo-pre-order.png" alt="">
            			<div class="clearfix"></div>
            			<img src="assets/images/special_packshots.png" alt="">
            			<img class="sc_button" src="assets/images/pre_order-game.png" alt="">
            			<img class="game_packs" src="assets/images/game_packshots.png" alt="">
            		</div>
            	</div>
        	</div>
    	</div>
    </section>
    <!--end about section-->

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
    
  <!--script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
  '.js><\/script>')
  </script-->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  
  <script src="javascripts/foundation/foundation.js"></script>
	
	<script src="javascripts/foundation/foundation.alerts.js"></script>
	
	<script src="javascripts/foundation/foundation.clearing.js"></script>
	
	<script src="javascripts/foundation/foundation.cookie.js"></script>
	
	<script src="javascripts/foundation/foundation.dropdown.js"></script>
	
	<script src="javascripts/foundation/foundation.forms.js"></script>
	
	<script src="javascripts/foundation/foundation.interchange.js"></script>
	
	<script src="javascripts/foundation/foundation.joyride.js"></script>
	
	<script src="javascripts/foundation/foundation.magellan.js"></script>
	
	<script src="javascripts/foundation/foundation.orbit.js"></script>
	
	<script src="javascripts/foundation/foundation.placeholder.js"></script>
	
	<script src="javascripts/foundation/foundation.reveal.js"></script>
	
	<script src="javascripts/foundation/foundation.section.js"></script>
	
	<script src="javascripts/foundation/foundation.tooltips.js"></script>
	
	<script src="javascripts/foundation/foundation.topbar.js"></script>

	<script src="javascripts/vendor/jquery.knob.js"></script>

    <script src="javascripts/vendor/transit.js"></script>	

    <script type="text/javascript" src="javascripts/vendor/jquery.nivo.slider.js"></script>
	
  
  <script>
    $(document).foundation();
  </script>

  <script>

  	//code for switch backgrounds on nav items
  	$(document).ready(function(){

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

  	//get file name
  //move: file 1 - top right, file two - right, file 

  $(document).ready(function(){

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
	          // elem.style['-moz-transform'] = "rotate("+rot+"deg)";
	          // elem.style.MozTransform = "rotate("+rot+"deg)";
	          // elem.style['-webkit-transform'] = "rotate("+rot+"deg)";
	          // elem.style['-o-transform'] = "rotate("+rot+"deg)";
	          // elem.style['-ms-transform'] = "rotate("+rot+"deg)";
	          angle += increase;
	          console.log(angle);
	      }

  	}

  	spin('file');
  	spin('name');


  //animate direction
	 $('.file').mouseover(function(){

	    var fileNum = $(this).attr('class').charAt(12);
	    // var topMov,
	    //     leftMov;

	    // switch(fileNum)
	    // {
	    // case '1':
	    //   topMov = '+=0px';
	    //   leftMov = '+=5px';
	    //   break;
	    // case '2':
	    //   topMov = '+=5px';
	    //   leftMov = '+=5px';
	    //   break;
	    // case '3':
	    //   topMov = '+=5px';
	    //   leftMov = '-=5px';
	    //   break;
	    // case '4':
	    //   topMov = '-=0px';
	    //   leftMov = '-=5px';
	    //   break;
	    // case '5':
	    //   topMov = '-=5px';
	    //   leftMov = '-=5px';
	    //   break;
	    // case '6':
	    //   topMov = '-=5px';
	    //   leftMov = '+=5px';
	    //   break;
	    // }

	    // console.log(topMov);
	    // console.log(leftMov);
	    // console.log(fileNum);

	      // $(this).stop().animate({

	      //   left: leftMov,
	      //   top: topMov

	      // }, 200, 'linear');


	  });

	    $('.file').mouseout(function(){

	        var fileNum = $(this).attr('class').charAt(12);
	    // var topMov,
	    //     leftMov;

	    // switch(fileNum)
	    // {
	    // case '1':
	    //   topMov = '-=0px';
	    //   leftMov = '-=5px';
	    //   break;
	    // case '2':
	    //   topMov = '-=5px';
	    //   leftMov = '-=5px';
	    //   break;
	    // case '3':
	    //   topMov = '-=5px';
	    //   leftMov = '+=5px';
	    //   break;
	    // case '4':
	    //   topMov = '+=0px';
	    //   leftMov = '+=5px';
	    //   break;
	    // case '5':
	    //   topMov = '+=5px';
	    //   leftMov = '+=5px';
	    //   break;
	    // case '6':
	    //   topMov = '+=5px';
	    //   leftMov = '-=5px';
	    //   break;
	    // }

	    //   $(this).stop().animate({

	    //     left: leftMov,
	    //     top: topMov

	    //   }, 300, 'linear');


	  });
	  
	  var parDiv = $('#final_gadg-cont');

	  $('.file').on('click', 'img', function(){

	  	var gadget = $(this).attr('src');
	  	var gadgName = $(this).attr('alt');

	  	console.log(gadget);

	    $('.file_cont').animate({ opacity: 0});
	    parDiv.find('.big_folder').children().attr('src', gadget).end().show().delay(300).animate({ opacity: 1 });
	    parDiv.find('.libya').children().text(gadgName).end().delay(300).animate({ opacity: 1, top: 100 });
	    parDiv.find('.web').delay(300).animate({ opacity: 1}, 200);
		
		parDiv.find("[data-name='" + gadgName + "']").removeClass('hidden').animate({ opacity: 1, bottom: 0});
		
	  });
	  
	  function findLabel(elem){
		  var folderName = elem.attr('class');
		  var lastChar = folderName.slice(-1);
		  
		  return lastChar;
	  }
	  
	  $('.file').mouseover(function(){	  
		 
		  var lastChar = findLabel($(this));
		  $('.name.folder_' + lastChar).find('a').stop().animate({ opacity : 1 }, 200);  

	  });
	  
	  $('.file').mouseout(function(){
		  
		  var lastChar = findLabel($(this));	  
		  $('.name.folder_' + lastChar).find('a').stop().animate({ opacity : 0.1 }, 800);  

	  });

	  parDiv.on('click', '.big_folder', function(){
		   
	    parDiv.find('.big_folder').animate({ opacity: 0});
	    $('.file_cont').show().delay(300).animate({ opacity: 1 }, 1000);
	    parDiv.find('.libya').animate({ opacity: 0, top: 60 });
	    parDiv.find('.web').delay(300).animate({ opacity: 0}, 50);
		
		parDiv.find('.gadget_info').animate({ opacity: 0, bottom: 50}, function(){
			$(this).addClass('hidden');
		});
		
	  });
});

  </script>
    
  <!--begin GA script-->
  <script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-15279170-1']);
	  _gaq.push(['_trackPageview', 'CAMPAIGNNAME']);
	
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
	
	<script type="text/javascript">
	  window.___gcfg = {lang: 'en-GB'};
	
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>

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
	<noscript>
	  <img src="http://b.scorecardresearch.com/p?c1=2&c2=3000068&cv=2.0&cj=1" />
	</noscript>
   <!-- End comScore Tag -->
   <!--
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
-->
</body>
</html>
