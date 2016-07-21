<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>Returning Multiple Values from a Function</title>
  </head>
  <body>
      <?php
        function add_subt($var1, $var2){
          $add = $var1 + $var2;
          $subt = $var1 - $var2;
          return array($add, $subt);
        }
        $resultArray = add_subt(10, 5);
        echo "Add: " . $resultArray[0] . "<br />";
        echo "Subt: " . $resultArray[1] . "<br />";
        list($add, $subt) = add_subt(20,7);
        echo "Add: " . $add . "<br />";
        echo "Subt: " . $subt . "<br />";
      ?>
  </body>
</html>
