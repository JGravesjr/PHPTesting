<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>Arrays</title>
  </head>
  <body>
      <?php
      $numbers = array(4,8,15,16,23,42);
      echo $numbers[1];
      ?>
      <br />
      <?php
      $mixed = array(6, "fox", "dog", array("x", "y", "z"));
      echo $mixed[2];
      echo $mixed[3];
      echo $mixed[3][1];
      echo print_r($mixed);
       ?>
       <br />
       <?php
        #Altering an array
        $mixed[2] = "cat";
        $mixed[4] = "mouse";
        $mixed[] = "horse";
        echo print_r($mixed);
        ?>
  </body>
</html>
