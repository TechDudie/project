<?php
$code = htmlentities($_POST["code"]); // sanitize the code a bit, but it doesn't make much difference in the long run because of how this is written
if ($code != "314159") { // PIE IN YOUR FACE LITERALLY IF YOU READ THE JOIN CODE
  header('Location: 404.html');
  die();
}
header('Location: game.html');
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Connecting</title>
    <link rel="stylesheet" href="css/game.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Ubuntu Mono'>
  </head>
  <body>
    <h1>Authenicating...</h1>
    <h2>You are being redirected to the correct location.</h2>
  </body>
</html>
