<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Jordans Site</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
  <?php
    include 'Database/connection.php';

    $aows = testConnections();

    echo ( $aows ? 'Happy' : 'Sad');

  ?>
</body>
</html>
