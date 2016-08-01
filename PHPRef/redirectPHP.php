<?php //redirecting to a new page.
  function redirect($newLocation) {
    header("Location: " . $newLocation);
    exit;
  }
  $logIn = $_GET['logIn'];
  if ($logIn == "1"){
    redirect("/sandbox/firstPage.php");
  } else {
    redirect("/sandbox/secondPage.php");
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>Redirect PHP</title>
  </head>
  <body>
    <?php

    ?>
  </body>
</html>
