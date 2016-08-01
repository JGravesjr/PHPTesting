<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>Type Juggling and Casting</title>
  </head>
  <body>
    settype($var, "int")<br />
    (integer) $var<br />
    <br />
    Type Juggling<br />
    <?php $count = "2"; echo gettype($count); ?><br />
    <?php $count += 3; echo("Type: " . gettype($count)); ?><br />
    <br />
    Type Casting<br />
    <?php settype($count, "integer"); echo "count: " . gettype($count); ?><br />
    <?php $count2 = (string) $count; echo "count2: " . gettype($count2); ?><br />
    <br />
    <?php $test1 = 3; $test2 = 3; settype($test1, "string"); (string) $test2; ?>
    <?php echo "test1: " . gettype($test1); ?><br />
    <?php echo "test2: " . gettype($test2); ?>
  </body>
</html>
