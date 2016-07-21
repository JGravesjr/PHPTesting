<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>Function Arguments</title>
  </head>
  <body>
    <?php
      function betterHello($greeting, $target, $punct){
        echo $greeting . " " . $target . $punct . "<br />";
      }
      betterHello("Hello!", "Goreface", "!!!");
      betterHello("Hello", "Goreface", NULL);
    ?>
  </body>
</html>
