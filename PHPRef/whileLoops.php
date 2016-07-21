<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>While Loops</title>
  </head>
  <body>
    while (expression){<br />
      statement;<br />
    }<br /><br />
    <?php
    $count = 0;
    while ($count <= 10) {
      if ($count == 5) {
        echo "Different";
      } else{
        echo $count;
      }
      $count++;
    }
    echo "<br />Count final value: {$count}.<br />";
    $count = 0;
    while ($count <= 10) {
      if (($count % 2) == 0) {
        echo "Even";
      } else{
        echo "Odd";
      }
      $count++;
    }
     ?>
  </body>
</html>
