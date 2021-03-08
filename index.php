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
    // $test = $_SERVER['SERVER_NAME'];
    // var_dump($test);
   $aows = testConnections();

    echo ( $aows ? 'Gay'  : 'Not gay ;( ');

  ?>
  <div class="nav">
  <input type="checkbox">
    <span></span>
    <span></span>
    <div class="menu">
      <li><a href="#">home</a></li>
      <li><a href="#">about</a></li>
      <li><a href="#">cursos</a></li>
      <li><a href="#">blog</a></li>
      <li><a href="#">contactos</a></li>
    </div>
</div>
</body>
</html>
