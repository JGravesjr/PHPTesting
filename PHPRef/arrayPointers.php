<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>Array Pointer</title>
  </head>
  <body>
    <?php
      $ages = array(4,8,15,16,23,42);
      //current shows current pointer value
      echo "1: " . current($ages) . "<br />";
      //Next moves the current value to the next value
      next($ages);
      echo "2: " . current($ages) . "<br />";
      //prev move the currenet value to the previous value
      prev($ages);
      echo "3: " . current($ages) . "<br />";
      //reset moves the pointer to the first element
      reset($ages);
      echo "4: " . current($ages) . "<br />";
      //end moves the pointer to the last element
      end($ages);
      echo "5: " . current($ages) . "<br />";
    ?><br /><br />
    <?php
      //while loop that moves the array pointer similar to foreach
      while($age = current($ages)){
        echo $age . " * ";
        next($ages);
      }
    ?>
  </body>
</html>
