<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>Included Functions</title>
  </head>
  <body>
    <?php
    function redirect($newLocation) {
      header("Location: " . $newLocation);
      exit;
    }
    ?>
  </body>
</html>
