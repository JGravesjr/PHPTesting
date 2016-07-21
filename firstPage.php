<?php
  require_once("includedFunctions.php");
  if (isset($_POST['submit'])){
    #Form was submitted
    if (isset($_POST['username'])){
      $username = $_POST["username"];
      $password = $_POST["password"];
      if ($username == "CowboyDr" && $password == "ggtr554T") {
        #Successful Login
        redirect("http://cowboydr.com/");
      } else {
        $username = $_POST["username"];
        $message = "Try again.";
      }}
    if (isset($_POST['value'])) {
        #Performing Validation checks on value.
        $min = 3;
        $max = 6;
        $set = array("abc","def","ghi");
        $value = $_POST['value'];
        if (!isset($value) || empty($value)){
          echo "There is no value for value.<br />";
        } elseif (strlen($value) < $min) {
          echo "The value does not have enough characters.<br />";
        } elseif (strlen($value) > $max) {
          echo "The value has too many characters.<br />";
        } elseif (!is_string($value)) {
          echo "Value is not a string.<br />";
        } elseif (!in_array($value, $set)) {
          echo "The value is not in the array.<br />";
        } else {
          echo "You did it!";
        }
      }
  } else {
    $username = "";
    $message = "Please enter your username and password.";
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>First Page</title>
  </head>
  <body>
    <?php $link_name = "Second Page";
          $id = 5;
          $company = "Johnson & Johnson"; ?>
      <a href="secondPage.php?id=<?php echo $id; ?>&company=<?php echo urlencode($company);
       ?>"> <?php echo $link_name; ?></a>

       <br />
       <?php echo $message; ?><br />
       <form action="firstPage.php" method="post">
         Username: <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" /><br />
         Password: <input tpye="password" id="password" name="password" value="" /><br />
         <br />
         Value: <input type="text" name="value" value="" /><br />
         <input type="submit" name="submit" value="Submit" />
       </form>

  </body>
</html>
