<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>Second Page</title>
  </head>
  <body>
      <a href="firstPage.php"> First Page</a>
      <pre>
        <?php print_r($_GET);
          $id = $_GET['company'];
          echo $id;
         ?>
         <pre>
            <?php print_r($_POST) ?>
            <br />
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
         </pre>
      </pre>
  </body>
</html>
