<!DOCTYPE HTML>

<html>
	<head>
	<script type="text/javascript">
		<!--
		if (screen.width <= 699) {
		document.location = "mobile.html";
		}
		//-->
		</script>
<!--notifikacioni -->
		<link rel="stylesheet" type="text/css" href="css/normalizenotify.css" />
		<link rel="stylesheet" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/tooltip-bloated.css" />
<!-- contacti-->
		<link rel="stylesheet" type="text/css" href="css/normalize2.css" />
		<link rel="stylesheet" type="text/css" href="css/demo2.css" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />


		<title>2musketeers radio</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=false;">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/flexslider.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="js/jquery.flexslider.js"></script>	
		<script type="text/javascript" >
			$(window).load(function() {
			$('.flexslider').flexslider();
			});	
		</script>	
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<link href="css/normalize.css" type="text/css" rel="stylesheet"></link>
		<link href="css/demo.css" type="text/css" rel="stylesheet"></link>
		<link href="css/icons.css" type="text/css" rel="stylesheet"></link>
		<link href="css/style1.css" type="text/css" rel="stylesheet"></link>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/modernizr.custom2.js"></script>

		<script type="text/javascript"> 
		var scrollY = 0;
			var distance = 40;
			var speed = 1;
			function autoScrollTo(el) {
			var currentY = window.pageYOffset;
			var targetY = document.getElementById(el).offsetTop;
			var bodyHeight = document.body.offsetHeight;
			var yPos = currentY + window.innerHeight;
			var animator = setTimeout('autoScrollTo(\''+el+'\')',10);
			if(yPos > bodyHeight){
			clearTimeout(animator);
			} else {
			if(currentY < targetY-distance){
			   scrollY = currentY+distance;
			   window.scroll(0, scrollY);
			   } else {
			   clearTimeout(animator);
			   }
			}
			}
			function resetScroller(el){
			var currentY = window.pageYOffset;
   			var targetY = document.getElementById(el).offsetTop;
			var animator = setTimeout('resetScroller(\''+el+'\')',speed);
			if(currentY > targetY){
			scrollY = currentY-distance;
			window.scroll(0, scrollY);
			} else {
			clearTimeout(animator);
			}
			}
		</script>
	</head>
	<body style="
	    margin: 0px auto;
	    min-width: 100%;
	    "> 
	    
<div id="wrapper">
	<div id="container">
    	<div id="containerholder">
<!-- /facebook koment-->
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

<!-- /facebook share -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- /fillimi -->
		

<!-- navigacioni-->


		<nav id="bt-menu" class="bt-menu bt-menu-close" >
		        <a class="bt-menu-trigger tooltip"> <span class="tooltip-content">You can easily navigate the city by car.</span>>

		            Menu

		        </a>
		        <ul>
            <li>
                <a class="bt-icon icon-home" href="#" onclick="return false;" onmousedown="resetScroller('banner');">

                    Search

                </a>
            </li>
            <li>
                <a class="bt-icon icon-folder-add" href="cassette.html">

                    Profile

                </a>
            </li>
            <li>
                <a class="bt-icon icon-window-delete" href="#">

                    Download

                </a>
            </li>
        </ul>
        <div class="bt-overlay"></div>
    </nav>
<!-- /container -->

<script src="js/classie.js"></script>
<script src="js/borderMenu.js"></script>

		<div class="header" id="background">
			<div id="headercontainer">
				<div class="logo" id="logoja"></div>	
					<div class="vendi" id="headeri">
						<a href="#" onclick="return false;" onmousedown="resetScroller('banner');"><img src="css/images/home.png"></a>
						<a href="#" onclick="return false;" onmousedown="autoScrollTo('about');"><img src="css/images/rethnesh.png"></a>
						<a href="#" onclick="return false;" onmousedown="autoScrollTo('radiocontainer');"><img src="css/images/radiojon.png"></a>
						<a href="#" onclick="return false;" onmousedown="autoScrollTo('social');"><img src="css/images/sociali.png"></a>			
					</div>
			</div>
		</div>
		

<div id="form">

	<section>
	
	<form id="theForm" class="simform" autocomplete="off" name="theForm" method="post" action="send.php">
	<div class="simform-inner">
	<ol class="questions">
				<ol class="questions">
					<li>
						<span><label for="q1">Ermi juaj p.sh.Shaip</label></span>
						<input id="q1"  name="q1" type="text" >
					</li>
					<li>
								<span><label for="q2">Mbiemri p.sh.KYK</label></span>
								<input id="q2" name="q2" type="text"/>
							</li>
							<li>
								<span><label for="q3"> Email-i p.sh. shaip.kyk@gmail.com</label></span>
								<input id="q3" name="q3" type="text"/>
							</li>
							<li>
								<span><label for="q4">Numri i telefonit </label></span>
								<input id="q4" name="q4" type="text"/>
							</li>
							<li>
								<span><label for="q5">Komenti juaj</label></span>
								<input id="q5" name="q5" type="text"/>
							</li>
							
						</ol><!-- /questions -->
						<button class="submit" type="submit">Send answers</button>
						<div class="controls">
							<button class="next"></button>
							<div class="progress"></div>
							<span class="number">
								<span class="number-current"></span>
								<span class="number-total"></span>
							</span>
							<span class="error-message"></span>
						</div><!-- / controls -->
					</div><!-- /simform-inner -->
					<span class="final-message"></span>
				</form><!-- /simform -->			


</section>

	</div>
		
		
			
			<div id="footer">
			<div id="footercontainer">
				<div class="footertekst"></div>
					<div class="foterline"></div>
						<div class="dev"></div>
							<div class="Copyright"></div>
			</div>
			</div>
<script src="js/classie2.js"></script>
		<script src="js/stepsForm.js"></script>
		<script>
			var theForm = document.getElementById( 'theForm' );

			new stepsForm( theForm, {
				onSubmit : function( form ) {
					// hide form
					classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

					/*
					form.submit()
					or
					AJAX request (maybe show loading indicator while we don't have an answer..)
					*/

					// let's just simulate something...
					
					var messageEl = theForm.querySelector( '.final-message' );
					
						messageEl.innerHTML = 'Suksese! Komenti juaj eshte derguar ne ekipen tone ,dhe kerkojme kohe per shqyretim'; 
					
											
					classie.addClass( messageEl, 'show' );
				}
			} );
		</script>



	 




			<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56720495-2', 'auto');
  ga('send', 'pageview');

</script>
</div>
</div>
</div>			
	</body>
	</html>

