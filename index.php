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
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(window).load(function() {
      	$(".loader").fadeOut(1000, "linear");
      })
    </script>
  </head>
  <body>
    <div class="loader"></div>
    <!-- <h1 id="header"> Hack Saint Louis </h1>
    <form method="post" action="./">
      Name: <input name="name" type="text">
      <br>
      Email: <input name="email" type="text">
      <input type="submit">
    </form> -->
    <div class="panel" id="first">
        <div class="scroll"></div>
        <h1>HACK SAINT LOUIS</h1>
    </div>
    <div class="panel doubleddiagonal" id="second">
      
    </div>
  </body>
</html>
