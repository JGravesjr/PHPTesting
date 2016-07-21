<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>Variables</title>
  </head>
  <body>
    <?php
    // Single-line Comments
    /*
    Double-line
    Comments
    */
    $var1 = 10;
    echo $var1;
    echo "<br />";
    //If you list the echo before the variable changes, you get the old value!
    $var1 = 100;
    echo $var1;
    ?>
    <?php echo "Hello" . "World!"; ?>
  </body>
</html>
