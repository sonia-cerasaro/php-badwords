<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  </head>
  <body>

    <?php
      $text = "Lorem ipsum dolor sit amet, lorem consectetur adipisicing, lorem elit.";
      // var_dump($_GET["text"]);
      $testo = $_GET['text'];
    ?>

    <h1>
      Esercizio testo con censura in PHP
    </h1>

    <p>
      <?php echo $testo ?>
    </p>

    <p>
      Questo testo e' composto da <?php echo strlen($testo) ?> lettere spazi inclusi.
    </p>

  </body>
</html>
