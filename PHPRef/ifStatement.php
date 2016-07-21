<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>If Statement</title>
  </head>
  <body>
    if (booleanExpression)<br />
      statement;<br />
      <br />
    Example: <br />
    if ($a > $b) {<br />
      echo "a is larger than b";<br />
    }<br /><br />
    <?php
    $a = 4; $b = 3;
    if ($b > $a) {
      echo "a is larger than b";
    }
    else {
      echo "does this work?";
    }
    ?><br /><br /><br />
    <?php //Welcome New Users
    $new_user = true;
    if ($new_user) {
      echo "<h1>Welcome!</h1>";
      echo "<p>We are glad you decided to join us.</p>";
    }
    ?>
    <?php //don't divide by zero
    $numerator = 20;
    $denominator = -54;
    if ($denominator != 0){
      $result = $numerator / $denominator;
      echo "Result: {$result}";
    }
    else {
      echo "You cannot divide a number by zero.";
    }?>
  </body>
</html>
