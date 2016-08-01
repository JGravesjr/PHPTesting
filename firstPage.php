<?php
  #This allows you to use php(or more?) functions defined on this page.
  require_once("includedFunctions.php");
  $errors = array();

  #This looks at the POST data for the submit button, then starts its processes
  #if it's there. Which in this case are either User information or Value.
  if (isset($_POST['submit'])){
    #First it looks at whether username was entered, then it assigns the POST
    #Data to variables $username and $password. Another nest checks for a
    #correct login(crudely programed in php), then uses the redirect function
    #defined in includedFunctions.php to send users to http://cowboydr.com/.
    #If you don't get the right login it tells you to try again.
    if (isset($_POST['username'])){
      $username = trim($_POST["username"]);
      $password = trim($_POST["password"]);

      #Requiring the presence of both a password and a username before allowing
      #user to attempt to log in.
      $fieldsRequired = array("username", "password");
      foreach($fieldsRequired as $field) {
        $value = trim($_POST[$field]);
        if (!presenceVal($value)){
          $errors[$field] = ucfirst($field) . " can't be blank";
        }
      }

      #Requiring max lengths from usernames and passwords.
      $maxLengthFields = array("username" => 30, "password" => 8);
      maxLengthVal($maxLengthFields);
      
      #Check for errors before logging in.
      if (empty($errors)) {
        #Try to log in.
        if ($username == "CowboyDr" && $password == "ggtr554T") {
          #Successful Login
          redirect("http://cowboydr.com/");
        } else {
          $username = $_POST["username"];
          $message = "Try again.";
        }
      }
    }
    #Checks for a third parameter, value. Then performs a series of validation
    #checks for testing purposes.
    if (!isset($_POST['value'])) {

      $min = 3;
      $max = 6;
      $set = array("abc","def","ghi");
      $value = $_POST['value'];
      $errors = array();
        if (!isset($value) || empty($value)){
          #Uses isset to make sure you entered something, uses empty to allow
          #users to enter 0. || is or.
          $errors["no-Value"] = "There is no value for value.<br />";
        } elseif (strlen($value) < $min) {
          #strlen(int) compared to variable $min(int), max is the same concept.
          $errors["min-Value"] = "The value does not have enough characters.<br />";
        } elseif (strlen($value) > $max) {
          $errors["max-value"] = "The value has too many characters.<br />";
        } elseif (!is_string($value)) {
          #Checks to see if the entered value is a string.
          $errors["no-String"] = "Value is not a string.<br />";
        } elseif (!in_array($value, $set)) {
          #Checks to see if the value is in an array.
          $errors["no-Array"] = "The value is not in the array.<br />";
        } else {
        echo "You did it!";
        }

    }

  } else {
    #For first time users.
    $username = "";
    $message = "Please enter your username and password.";
  }


?>
<!-- Stating DOCTYPE and source of template. -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<!-- starting html markup and language settings. -->
<html lang="en">
  <!-- Opening the head content, only using title at the moment. -->
  <head>
    <title>First Page</title>
  </head>
  <body>

    <?php
      #Modifying the link descripters . Setting a variable for the linkName and
      #companyName. .
      $linkName = "Second Page";
      $id = 5;
      $companyName = "Johnson & Johnson";
    ?>

    <a href="secondPage.php?id=<?php echo $id; ?>&company=<?php echo urlencode($companyName);
    ?>"><?php echo $linkName; ?></a><br />

    <?php
    #if a message for anything is set this will echo it, if it isn't, no probs.
    if (isset($message)){
        echo $message;
    }
    ?><br />

    <form action="firstPage.php" method="post">
      <!-- Form to test out forms. Takes username, password, value, and submit.
      -->
      Username: <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" /><br />
      Password: <input tpye="password" id="password" name="password" value="" /><br /><br />
      Value: <input type="text" name="value" value="" /><br />
      <input type="submit" name="submit" value="Submit" />
    </form>

    <!-- echo the newly created form_errors function. -->
    <?php echo form_errors($errors); ?>

  </body>
</html>
