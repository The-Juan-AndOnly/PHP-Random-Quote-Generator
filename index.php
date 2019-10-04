<?php
include 'inc/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <script>

    setInterval(() => {
      window.location.reload(1);
    }, 7500);

  </script>
</head>
<body>
  <div class="container">
    <div id="quote-box">
      <?php echo printQuote();?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(1)" >Show another quote</button>
  </div>
</body>
</html>


