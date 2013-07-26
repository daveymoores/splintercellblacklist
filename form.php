<?php
$minAge = 18; //
$minAge *= 3600*24*365.25;  // $minAge in seconds

if (isset($_COOKIE["age"])) 
	{
	if ($_COOKIE["age"] == "under") 
		{
 			header('Location: fail.php');
		}
	
	else if ($_COOKIE["age"] == "over")
		{
		header('Location: index.php');
	}
	
	}	
$html = <<< OET


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
    
	<!--[if gte IE 9]>
	  <style type="text/css">
	    .gradient {
	       filter: none;
	    }
	  </style>
	<![endif]-->

</head>
<body class="age_gate">
	
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
            <h3>ENTER YOUR DATE OF BIRTH</h3>
              
                <div class="input_wrapper">
                    <div class="row">
                        <div class="large-4 columns">
                            <label>Day</label>
                            <input type="text" name="day" value="" maxlength="2" type="number" placeholder="Day" />
                        </div>
                        <div class="large-4 columns">
                            <label>Month</label>
                            <input type="text" name="month" value="" maxlength="2" placeholder="Month" />
                        </div>
                        <div class="large-4 columns">
                            <label>Year</label>
                            <input type="text" name="year" value="" maxlength="4" placeholder="Year" /> 
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" value="Verify Age" class="" />
                
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


OET;

/*day month and year passed to dob var which calculates if age is > 18 in real-time
*/

if(isset($_POST['submit'])){

$day = ($_POST['day']);
$month = ($_POST['month']);
$year = ($_POST['year']);
$dob = ($day.".".$month.".".$year);
$birth_date = strtotime($dob);
$now = strtotime("now");
$age = $now - $birth_date; // age is in seconds

	if($age > $minAge)
        {	
        include ('age_over.php'); /*sets the over age cookie*/
        header('Location: index.php');        
		}
		
	else if ($age < $minAge)			
		header('Location: fail.php');
		
} else
{
	echo $html;
}
?>

<script type="text/javascript">
/*disable keyboard entry function*/
function numbersOnly(evt)
 {	 
	 evt = (evt) ? evt : event;
	 var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
           ((evt.which) ? evt.which : 0));
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {          
           return false;		
}
return true;
	}
/*input validation checks date is sensible or submit will return false:
- all form fields must contain value
- day must be < 32
- month < 13
- year > 1900
*/	
function validateForm() {
	var day = document.forms["age_check"]["day"].value;
	var month = document.forms["age_check"]["month"].value;
	var year = document.forms["age_check"]["year"].value;
	var submitButton = document.forms["age_check"]["submit"].value;
	if (day==null || day=="" || day > 31) 
	{
		window.alert("Enter correct value"); /*delete to remove validation alert*/
		return false;		
	}
	
	else if  (month==null || month=="" || month > 12) 
	{
		window.alert("Enter correct value"); /*delete to remove validation alert*/
		return false;
		
	}
	
	else if  (year==null || year=="" || year < 1900) 
	{
		window.alert("Enter correct value"); /*delete to remove validation alert*/
		return false;
		
	}
}

</script>


</body>
</html>

 


