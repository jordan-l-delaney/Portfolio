<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Jordans Site</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="CSS/style.css">

  <script src="jquery-3.5.1.min.js"></script>

</head>

<body>
  <?php
    include 'Database/connection.php';
    include 'Functions/front_end_functions.php';
   //  // $test = $_SERVER['SERVER_NAME'];
   //  // var_dump($test);
   // $aows = testConnections();
   //
   //  echo ( $aows ? 'Gay'  : 'Not gay ;( ');
   $response = trackStock('GME');

   $GME = json_decode($response, true);

  ?>
<div class="section head">
  <?php
    echo getnav();
  ?>
</div>

<div id="gmeTrack" class="section gme">
    <?php
    $todaysClose = $GME['Time Series (Daily)']['2021-03-08']['4. close'];
    $myStock = ( $todaysClose * 10 ) * 0.85;

    echo '<p>
        Today GME Closed on ' . $todaysClose . ' my shares are worth ' . $myStock . '
          </p>';
    ?>
</div>

</body>
</html>
