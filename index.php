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

<html>
	<head>
		<title>Hack Saint Louis</title>
		<link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="192x192" href="/icons/android-chrome-192x192.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
		<link rel="manifest" href="/icons/manifest.json">
		<link rel="mask-icon" href="/icons/safari-pinned-tab.svg" color="#da284f">
		<link rel="shortcut icon" href="/icons/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono|Palanquin+Dark:700" rel="stylesheet">
		<meta name="apple-mobile-web-app-title" content="Hack Saint Louis">
		<meta name="application-name" content="Hack Saint Louis">
		<meta name="msapplication-TileColor" content="#da284f">
		<meta name="msapplication-TileImage" content="/icons/mstile-144x144.png">
		<meta name="msapplication-config" content="/icons/browserconfig.xml">
		<meta name="theme-color" content="#da284f">
		<meta name="google-site-verification" content="SPLlsq7EE_7QzwK5pdt8g38HjDdxwQJ76crDUS8-2W8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/profiles.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        var formSubmitted = function(success) {
          if (success) {
            $("#subscribe button").css("background-color", "#00CD00");
            $("#subscribe button").css("border", "2px solid #00CD00");
            $("#subscribe input").css("border", "2px solid #00CD00");
            $("#subscribe button").html("thanks!");
          } else {
            $("#subscribe button").css("background-color", "red");
            $("#subscribe button").css("border", "2px solid red");
            $("#subscribe input").css("border", "2px solid red");
            $("#subscribe button").html("error... try again?");
          }
        };
        $("#subscribe button").click(function(){
            var email = $("#subscribe input").val();
            $.ajax({
                type: 'POST',
                data: {subscriberEmail: email},
                success: function() {
                  formSubmitted(true);
                },
                error: function() {
                  formSubmitted(false);
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
		<div id="massContainer">
			<div class="panel" id="first">
        <div id="title">
					 <img src="res/Logo.svg">
					 <h1> Hack <br> Saint Louis </h1>
        </div>
        <div id="subtitle"> Oct. 13-15, 2017 / Some Fancy Venue </div>
        <form autocomplete="off" id="subscribe">
          <!-- note: these actually need to be on the same line -->
          <input type="text" placeholder="email@example.com"><button type="button">get updates</button>
        </form>
				<div class="scroll"></div>
      </div>
			<div class="panel doubleddiagonal" id="second">
        <h1>What is <span id="hsl">Hack Saint Louis</span>?</h1>
        <!-- <ul class="ch-grid">
          <li><div class="ch-item ch-img-1">
            <div class="ch-info">
              <h3>Michael Gira</h3>
              <p>Senior Memer
                <br>
                <a href="https://github.com/michaelgira23">GitHub Profile</a>
                <br>
                <a href="https://www.linkedin.com/in/michael-gira/">LinkedIn Profile</a>
              </p>
            </div>
          </div></li>
          <li><div class="ch-item ch-img-2">
            <div class="ch-info">
              <h3>Bob Sforza</h3>
                <p>Highly Specialized Beekeeper
                 <br><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">LinkedIn Profile</a>
                </p>
            </div>
          </div></li>
          <li><div class="ch-item ch-img-3">
            <div class="ch-info">
              <h3>Nick Clifford</h3>
              <p>Nickle Counter
                 <br><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">LinkedIn Profile</a>
              </p>
            </div>
          </div></li>
          <li><div class="ch-item ch-img-4">
            <div class="ch-info">
              <h3>Sidd Mehta</h3>
              <p>Meme Investor
                 <br><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">LinkedIn Profile</a>
              </p>
            </div>
          </div></li>
          <li><div class="ch-item ch-img-5">
            <div class="ch-info">
              <h3>Jack Cai</h3>
              <p>Designated Brawlhalla Player
                 <br><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">LinkedIn Profile</a>
              </p>
            </div>
          </div></li>
          <li><div class="ch-item ch-img-6">
            <div class="ch-info">
              <h3>Michel Ge</h3>
              <p>Name Maker Uper
                 <br><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">LinkedIn Profile</a>
              </p>
            </div>
          </div></li>
        </ul> -->
      </div>
			<div id="transitionOne"> </div>
			<div id="transitionTwo"> </div>
			<div class="panel" id="third">
				<h1 id="FAQ">Frequently Asked Questions</h1>
				<ul class="FAQContainer">
					<li>
						<div class="Q"> <span> Who can participate? </span> </div>
						<div class="A"> <span>Any student! If you attend a university, high school, or middle school, you're eligible to hack.</span> </div>
					</li>
					<li>
						<div class="Q"> <span> I'm new to programming, can I still come? </span> </div>
						<div class="A"> <span> Yes! Hack Saint Louis is a place to learn, experiment, and have fun. Remember, everyone starts somewhere.</span> </div>
					</li>
					<br>
					<li>
						<div class="Q"> <span> What should I bring? </span> </div>
						<div class="A"> <span> Bring a computer, a valid student ID, and a great attitude. Everything else (food, swag, and love) will be provided. </span> </div>
					</li>
					<li>
						<div class="Q"> <span> How much does Hack Saint Louis cost? </span> </div>
						<div class="A"> <span> It's entirely free. The swag? Free. The food? Free. The experience? Priceless. </span> </div>
					</li>
				</ul>
				<ul class="FAQContainer">
					<li>
						<div class="Q"> <span> When and where is Hack Saint Louis? </span> </div>
						<div class="A"> <span> The event will be held at the beautiful ___. Check in starts at 5:00pm on Oct. 13 and we'll close up shop around 3:00pm on Oct. 15.</span> </div>
					</li>
					<li>
						<div class="Q"> <span> Do you offer travel reimbursement? </span> </div>
						<div class="A"> <span> Unfortunately, we cannot guarantee travel reimbursement at this time. We'll update this page if that changes.</span> </div>
					</li>
					<br>
					<li>
						<div class="Q"> <span> Do I need a team? </span> </div>
						<div class="A"> <span> You can come with friends, colleagues, or come alone. If you don't have a team, we'll find you one.</span> </div>
					</li>
					<li>
						<div class="Q"> <span> Still have questions? </span> </div>
						<div class="A"> <span> Feel free to shoot us a message at <a href="mailto:info@hacksaintlouis.com">info@hacksaintlouis.com</a>. We're more than happy to answer questions. </span> </div>
					</li>
				</ul>
			</div>
			<div class="panel" id="fourth">
				<!-- Sponsors -->
			</div>
			<div class="panel" id="fifth">
				<!-- The team? -->
			</div>
		</div>
	</body>
</html>
