<?php
$code = htmlentities($_POST["code"]);
if ($code != "314159") { // PIE IN YOUR FACE LITERALLY IF YOU READ THE JOIN CODE
  header('Location: 404.html');
}
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Game</title>
    <link rel="stylesheet" href="css/game.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Ubuntu Mono'>
  </head>
  <body>
    <textarea autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" id="terminal" class="terminal" rows="1000" cols="1000"></textarea>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </body>
</html>
