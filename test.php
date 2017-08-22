<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <script>
//  setTimeout("location.reload()",1000);
  </script>
  <body>
    <?php
      echo "<h1>안녕하세요</h1>";

      echo "별찍기";
      for ($i=0; $i < 5; $i++) {
        for ($j=0; $j < $i; $j++) {
          echo "*";
        }
        echo "<br>";
      }

      echo "<br>";
      echo "<br>";

      for ($i=0; $i < 5; $i++) {
        for ($j=0; $j < (5-$i); $j++) {
          echo "*";
        }
        echo "<br>";
      }

      echo "<br>";
      echo "<br>";

      for ($i=0; $i < 5; $i++) {
        for ($j=0; $j <  (5-$i); $j++) {
            echo "0";
        }
        for ($j=0; $j < $i; $j++) {
          echo "*";
        }
        echo "<br>";
      }

    ?>



  </body>
</html>
