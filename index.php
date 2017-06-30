<?php

	require("db.php");
	$mysqli = getDB();

	if (isset($_POST["name"])) {

		$name = $_POST["name"];
		$email = $_POST["email"];

		$query = $mysqli->prepare("INSERT INTO registrants (name, email) VALUES (?, ?)");
		$query->bind_param('ss', $name, $email);
		$query->execute();

		echo $name;
		echo $email;

	}
	if (isset($_POST["subscriberEmail"])) {
		$email = $_POST["subscriberEmail"];
		$query = $mysqli->prepare("INSERT INTO subscribers (email) VALUES (?)");
		$query->bind_param('s', $email);
		$query->execute();
	}

?>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Hack Saint Louis</title>
		<link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="192x192" href="/icons/android-chrome-192x192.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
		<link rel="manifest" href="/icons/manifest.json">
		<link rel="mask-icon" href="/icons/safari-pinned-tab.svg" color="#da284f">
		<link rel="shortcut icon" href="/icons/favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Mono|Palanquin+Dark:700" rel="stylesheet">
		<meta name="description" content="Hack Saint Louis challenges students to build a hardware or software project in 48 hours, bringing together programmers, designers, leaders and visionaries" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="apple-mobile-web-app-title" content="Hack Saint Louis">
		<meta name="application-name" content="Hack Saint Louis">
		<meta name="msapplication-TileColor" content="#da284f">
		<meta name="msapplication-TileImage" content="/icons/mstile-144x144.png">
		<meta name="msapplication-config" content="/icons/browserconfig.xml">
		<meta name="theme-color" content="#da284f">
		<meta name="geo.position" content="38.624306;-90.187127">
		<meta name="geo.placename" content="Saint Louis, MO">
		<meta name="geo.region" content="US-MO">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@hacksaintlouis">
		<meta name="twitter:title" content="Hack Saint Louis">
		<meta name="twitter:image" content="http://hacksaintlouis.com/res/Twitter.png" />
		<meta property="og:title" content="Hack Saint Louis" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://hacksaintlouis.com" />
		<meta property="og:image" content="http://hacksaintlouis.com/res/Logo.svg" />
		<meta property="og:description" content="48 Hours of inventing and creating in Saint Louis. October 13-15." />
		<meta name="google-site-verification" content="SPLlsq7EE_7QzwK5pdt8g38HjDdxwQJ76crDUS8-2W8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<link href="css/stylesheet.css" rel="stylesheet">
		<link href="css/profiles.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				/* plagiarized from https://stackoverflow.com/questions/2855865/validating-email-addresses-using-jquery-and-regex, sure hope
		        they know what this means because I sure don't */
		        function isValidEmailAddress(emailAddress) {
		          var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
		          return pattern.test(emailAddress);
		        };
				var formSubmitted = function(status) {
					if (status === 0) {
		           		var success = "<p> Thanks! You'll hear from us soon. </p>";
						$("#subscribe button").replaceWith(success);
						$("#subscribe input").remove();
					} else if (status === 1) {
						$("#subscribe button").css("background-color", "red");
						$("#subscribe button").css("border", "2px solid red");
						$("#subscribe input").css("border", "2px solid red");
						$("#subscribe button").html("error... try again?");
					} else {
			            $("#subscribe button").css("background-color", "red");
			            $("#subscribe button").css("border", "2px solid red");
			            $("#subscribe input").css("border", "2px solid red");
			            $("#subscribe button").html("invalid email!");
		        	}
				};
				$("#subscribe button").click(function() {
					var email = $("#subscribe input").val();
			        if (!isValidEmailAddress(email)) {
			          formSubmitted(2);
			          return;
		        	}
					$.ajax({
							type: 'POST',
							data: {subscriberEmail: email},
							success: function() {
								formSubmitted(0);
							},
							error: function() {
								formSubmitted(1);
							}
					});
				});

				$(".loader").fadeOut(1000, "linear");

				// disable enter key submitting form
				$(window).keydown(function(event){
					if(event.keyCode == 13) {
						event.preventDefault();
						return false;
					}
				});
			});
		</script>
	</head>
	<body>
		<div class="popup-message"></div>
		<div class="loader"></div>
		<div class="panel" id="first">
			<div id="header">
				<img src="res/Logo.svg">
				<h1 id="title"> Hack <br> Saint Louis </h1>
			</div>
			<div id="subtitle"> Oct. 13-15, 2017 / Some Fancy Venue </div>
			<form autocomplete="off" id="subscribe">
				<!-- note: these actually need to be on the same line -->
				<input type="text" placeholder="email@example.com"><button type="button">get updates</button>
				<!-- <a class="typeform-share link" href="https://bob374.typeform.com/to/JKTflm" data-mode="1" target="_blank">Launch me!</a>
				<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm_share',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
				These two lines are the Typeform register thingydo, we'll eventually switch. -->
			</form>
			<div class="scroll"></div>
		</div>
		<div class="panel doubleddiagonal" id="second">
			<h1>What is <span id="hsl">Hack Saint Louis</span>?</h1>
			<p>
			Hack Saint Louis challenges students to build a hardware or software project in 48 hours, bringing together programmers, designers, leaders and visionaries. Over a weekend of rich learning and intense collaboration, you'll gain hands-on work experience and forge valuable connections with big-name companies, and you'll strengthen friendships and make lasting memories while you're at it. Whether you're a seasoned developer looking to hone your skills or a curious stranger to the computer science world, this is the place for you!
			</p>
		</div>
		<div class="panel doubleddiagonal" id="third">
			<h1 id="FAQ">Frequently Asked Questions</h1>
			<ul class="FAQContainer">
				<li>
					<div class="Q"> <span> Who can participate? </span> </div>
					<div class="A"> <span>Any student! If you attend a university, high school, or middle school, you're eligible to hack.</span> </div>
				</li>
				<li>
					<div class="Q"> <span> I'm new to programming, can I still come? </span> </div>
					<div class="A"> <span> Yes! Hack Saint Louis is a place to learn, experiment, and have fun. We'll also have mentors at the event who can answer questions and give crash courses. Remember, everyone starts somewhere.</span> </div>
				</li>
				<li>
					<div class="Q"> <span> What should I bring? </span> </div>
					<div class="A"> <span> Bring a computer, a valid student ID, and a great attitude. Everything else (food, swag, and love) will be provided. </span> </div>
				</li>
				<li>
					<div class="Q"> <span> How much does Hack Saint Louis cost? </span> </div>
					<div class="A"> <span> It's entirely free! </span> </div>
				</li>
				<li>
					<div class="Q"> <span> When and where is Hack Saint Louis? </span> </div>
					<div class="A"> <span> The event will be held at the beautiful ___. Check in starts at 5:00pm on Oct. 13 and we'll close up shop around 3:00pm on Oct. 15.</span> </div>
				</li>
				<li>
					<div class="Q"> <span> Do you offer travel reimbursement? </span> </div>
					<div class="A"> <span> Unfortunately, we cannot guarantee travel reimbursement at this time. We'll update this page if that changes.</span> </div>
				</li>
				<li>
					<div class="Q"> <span> Do I need a team? </span> </div>
					<div class="A"> <span> You can come with friends, colleagues, or come alone. If you don't have a team, we'll find you one.</span> </div>
				</li>
				<li>
					<div class="Q"> <span> Where can I spend the night? </span> </div>
					<div class="A"> <span> You're free to come and go as you wish, so you can go home to sleep or book a hotel if you're not from the area. However, many people bring sleeping bags and spend the night in the venue. </span> </div>
				</li>
				<li>
					<div class="Q"> <span> Will food be provided? </span> </div>
					<div class="A"> <span> All meals will be provided, including snacks. </span> </div>
				</li>
				<li>
					<div class="Q"> <span> Will there be prizes? </span> </div>
					<div class="A"> <span> Yes! There will be cash prizes for the winners. <br> [more details later] </span> </div>
				</li>
				<li>
					<div class="Q"> <span> How are winners determined? </span> </div>
					<div class="A"> <span> Teams will present their projects on Sunday, the final day. From these presentations, a panel of judges will select the winners. </span> </div>
				</li>
				<li>
					<div class="Q"> <span> Still have questions? </span> </div>
					<div class="A"> <span> Feel free to shoot us a message at <a href="mailto:info@hacksaintlouis.com">info@hacksaintlouis.com</a>. We're more than happy to answer questions. </span> </div>
				</li>
			</ul>
		</div>
		<!-- <svg id="curveUpColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
			<path d="M0 100 C 20 0 50 0 100 100 Z"/>
		</svg> -->
		<div id="transitionTwo"> </div>
		<div id="transitionOne"> </div>
		<div class="panel" id="fourth">
			<h1 id="FSchedule">Schedule</h1>
			<div id="scheduleContainer">
				<ul id="friday" class="scheduleListContainer">
					<li class="scheduleListDay scheduleListItem">
						<span class="scheduleListDayItem"> Friday </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 11:00am </span> <span class="thing"> Check in </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 11:45am </span> <span class="thing"> Opening ceremony </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 12:15pm </span> <span class="thing"> Hacking begins, lunch </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 2:30pm </span> <span class="thing"> Workshop </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 5:45pm </span> <span class="thing"> Dinner </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 7:15pm </span> <span class="thing"> Workshop </span>
					</li>
				</ul>
				<ul id="saturday" class="scheduleListContainer">
					<li class="scheduleListDay scheduleListItem">
						<span class="scheduleListDayItem"> Saturday </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 12:00am </span> <span class="thing"> Midnight snack </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 7:00am </span> <span class="thing"> Breakfast </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 8:30am </span> <span class="thing"> Workshop </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 12:15pm </span> <span class="thing"> Lunch </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 2:30pm </span> <span class="thing"> Workshop </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 5:45pm </span> <span class="thing"> Dinner </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 7:15pm </span> <span class="thing"> Workshop </span>
					</li>
				</ul>
				<ul id="sunday" class="scheduleListContainer">
					<li class="scheduleListDay scheduleListItem">
						<span class="scheduleListDayItem"> Sunday </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 12:00am </span> <span class="thing"> Midnight snack </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 7:00am </span> <span class="thing"> Breakfast </span>
					</li>
					<!-- no workshop, just 5 hours of last-minute hacking -->
					<li class="scheduleListItem">
						<span class="time"> 12:15pm </span> <span class="thing"> Hacking closes </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 12:30pm </span> <span class="thing"> Judging begins </span>
					</li>
					<li class="scheduleListItem">
						<span class="time"> 1:30pm </span> <span class="thing"> Closing ceremony </span>
					</li>
				</ul>
			</div>
		</div>
		<div id="transitionOne"> </div>
		<div id="transitionTwo"> </div>
		<!-- <div class="panel" id="fifth">
			<h1 id="TSponsors">Sponsors</h1>
		</div> -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-60578824-3', 'auto');
			ga('send', 'pageview');

		</script>
	</body>
</html>
