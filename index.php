<?php
while (1) {
  $code = $_POST["code"];
  if ($code != "") {
    echo "Request successful. Code: " . $code;
    $code = "";
  }
}
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>TechnoQuiz</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Ubuntu Mono'>
  </head>
  <body>
    <textarea autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" id="terminal" class="terminal" rows="1000" cols="1000"></textarea>
    <script src="lib/lz-string.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
