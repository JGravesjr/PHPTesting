<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>Returning Values from a Function</title>
  </head>
  <body>
    <?php
      function add($var1, $var2){
        $sum = $var1 + $var2;
        return $sum;
      }
      $result = add(3,4);
      echo $result. "<br />";
      $result = add(5,$result);
      echo $result;
    ?>
    <br /><br />
    <?php
      function chineseZodiac($year){
        switch (($year - 4) % 12) {
          case 0:   return  'Rat';
          case 1:   return  'Ox';
          case 2:   return  'Tiger';
          case 3:   return  'Rabbit';
          case 4:   return  'Dragon';
          case 5:   return  'Snake';
          case 6:   return  'Horse';
          case 7:   return  'Goat';
          case 8:   return  'Monkey';
          case 9:   return  'Rooster';
          case 10:  return  'Dog';
          case 11:  return  'Pig';
      } }
      $zodiac = chineseZodiac(1995);
      echo "1995 is the year of the {$zodiac}.";
    ?>
  </body>
</html>
