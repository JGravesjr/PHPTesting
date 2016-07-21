<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Second Page</title>
  </head>
  <body>
    <!-- A link! -->
    <a href="firstPage.php"> First Page</a>

    <!-- Show off for putting weird company names into URLs -->
    <pre>
      <?php print_r($_GET);
        $id = $_GET['company'];
        echo $id;
      ?>
    <pre>

    <!-- This was wrong :) -->
    <?php print_r($_POST) ?><br />

    <!-- Form processing page, for most cases use same page form processing.-->
    <?php
      if (isset($_POST["submit"])){
        # boolean_test ? value_if_true : value_if_false;
        $username = isset($_POST["username"]) ? $_POST["username"] : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";
        echo "{$username}'s password is {$password}.";
      } else {
        echo "Please return to previous page and enter username and password.";
      }
    ?>


  </body>
</html>
