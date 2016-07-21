<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>urlencode</title>
  </head>
  <body>
      <a href="firstPage.php"> First Page</a>
      <pre>
        <?php
          $page = "William Shakespeare";
          $quote = "To be or not to be";
          $link1 = "/bio/" . rawurlencode($page) . "?quote=" .
          urlencode($quote); //Appropriate way to do it.
          $link2 = "/bio/" . urlencode($page) . "?quote=" .
          rawurlencode($quote); //Wrong way to do it.
         ?>
      </pre>
  </body>
</html>
