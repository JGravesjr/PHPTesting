<?php
  header("HTTP 1.1/ 404 Not Found");
  header("X-Powered-By: Mystery");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>Headers</title>
  </head>
  <body>
    <!-- Header testing -->
    <pre>
      <?php print_r(headers_list()); ?>
    </pre>
  </body>
</html>
