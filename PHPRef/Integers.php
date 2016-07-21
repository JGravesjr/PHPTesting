<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>Integers</title>
  </head>
  <body>
    <?php
      $var1 = 3;
      $var2 = 4;
      ?>
      #Maths <?php echo ((1 + 2 + $var1) * $var2) / 2 -5; ?><br />
      #Absolute Value <?php echo abs(0-300); ?><br />
      #Exponential <?php echo pow(2,8); ?><br />
      #Square Root <?php echo sqrt (100); ?><br />
      #Modulo <?php echo fmod(20, 7); ?><br />
      #Random <?php echo rand(); ?><br />
      #Random (Min, Max) <?php echo rand(1,10); ?><br />
      <br />
      <!-- can use with -= *= /= -->
      #+= <?php $var2 += 4; echo $var2; ?><br />
      <br />
      #Increment <?php $var2++; echo $var2; ?><br />
      #Decrement <?php $var2--; echo $var2; ?><br />
      <br />

    <br />

  </body>
</html>
