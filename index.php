<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  </head>
  <body>


    <?php
      $testo = "Lorem ipsum dolor sit amet, ipsum consectetur adipisicing elit, ipsum sed do eiusmod tempor incididunt.";

      //var_dump($_GET['badwords']);

      $bad = $_GET['badwords'];
     ?>

     <p>
       <?php echo $testoCensurato = str_replace($bad, '***', $testo); ?>

       <br>

       Questo testo e' composta da <?php echo strlen($testoCensurato) ?> lettere spazi inclusi.
     </p>



  </body>
</html>
