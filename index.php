<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>MP3 EM PHP</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="container">
    <?php

    include_once 'helps.php';

    if (isset($_GET['page'])) {
      if (file_exists("pages/{$_GET['page']}.php")) {
        include_once "pages/{$_GET['page']}.php";
      } else {
        include_once 'pages/erro404.php';
      }
    } else {
      include_once 'pages/albums.php';
    }
    ?>
  </div>
</body>

</html>