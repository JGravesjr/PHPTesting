<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
      <title>Defining Functions</title>
  </head>
  <body>
    function name($arg1, $arg2) {<br />
      statement;<br />
    }<br /><br />
    <?php
    function sayHello(){
      echo "Hello World!";
    }
    sayHello();
    ?><br /><br />
    <?php
      function sayHelloTo($word){
        echo "Hello {$word}!<br />";
      }
      sayHelloTo("Everyone!");
      /*
      function sayHelloTo($word){
        echo "Can't redefine a functions.<br />";
      }
      */
    ?>
  </body>
</html>
