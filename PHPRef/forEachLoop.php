<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>ForEach Loops</title>
  </head>
  <body>
    foreach ($array as $value)<br />
      statement;<br />
    <br />
    foreach ($array as $key => $value) {
      statement;
    }
    <?php
      $ages = array(4,8,15,16,23,42);

      foreach($ages as $age) {
        echo "Age: {$age}<br />";
      }
    ?>
    <?php
      //foreach using associative Arrays
      $person = array("first_name" => "J", "last_name" => "Graves", "address" =>
    "7212 N Himes Ave", "city" => "Tampa", "state" => "FL", "zip_code" => "33614");

      foreach($person as $attribute => $data) {
        $attr_nice = ucwords(str_replace("_", " ", $attribute));
        echo "{$attr_nice}: {$data}<br />";
      }
    ?>
  </body>
</html>
