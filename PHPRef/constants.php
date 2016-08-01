<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>Constants</title>
  </head>
  <body>
    <?php
      define("MAX_WIDTH", 980);
      echo MAX_WIDTH;
     ?>
     <br />
     <?php //MAX_WIDTH += 1; echo MAX_WIDTH; //can't change the value ?><br />
     <?php define("MAX_WIDTH", 981); echo MAX_WIDTH; //Can't redefine ?><br />


  </body>
</html>
