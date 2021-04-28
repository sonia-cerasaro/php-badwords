<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  </head>
  <body>

    <?php
      $testo = "There’s that word again: ‘heavy.’ Why are things so heavy in the future? Is there a problem with the Earth’s gravitational pull?";
      $bad = $_GET['badword'];
     ?>

     <p>
       <?php echo $testoCensurato = str_replace($bad, '***', $testo) ?>

       <br>

       Doc's length quote: <?php echo strlen($testoCensurato) ?> letters.
     </p>

  </body>
</html>
