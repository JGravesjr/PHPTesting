<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>Floating Point</title>
  </head>
  <body>
    <?php
    echo $float = 3.14;
    echo "\n";
    echo $float + 7;
    echo "\n";
    echo 4/3;
    echo "\n";
    echo 4/0;
    echo "\n";
    ?>
    #Round <?php echo round($float, 1); ?><br />
    #Ceiling <?php echo ceil($float); ?><br />
    #Floor <?php echo floor($float); ?><br />
    <br />

    <?php
    #These are tests that show what a number is in boolean true/false (1, [])
    $integer = 3;
    echo "Is {$integer} integer? " . is_int($integer);
    echo " Is {$float} integer? " . is_int($float);
    echo " Is {$integer} float? " . is_float($integer);
    echo " Is {$float} float? " . is_float($float);
    echo " Is {$integer} numeric? " . is_numeric($float);
    echo " Is {$float} numeric? " . is_numeric($float);
    ?>

  </body>
</html>
