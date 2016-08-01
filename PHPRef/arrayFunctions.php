<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>Array Functions</title>
  </head>
  <body>
    <?php
    $assoc = array(8,23,15,42,16,4);
    ?>
    Count: <?php echo count($assoc); ?><br />
    Max Value: <?php echo max($assoc); ?><br />
    Min Value: <?php echo min($assoc); ?><br />
    <br />
    Sort: <?php sort($assoc); print_r($assoc); ?><br />
    Reverse Sort: <?php rsort($assoc); print_r($assoc); ?><br />
    <br />
    Implode: <?php echo $num_string = implode(" * ", $assoc); ?><br />
    Explode: <?php print_r(explode(" * ", $num_string)); ?><br />
    <br />
    15 in array? <?php echo in_array(15, $assoc); ?>
  </body>
</html>
