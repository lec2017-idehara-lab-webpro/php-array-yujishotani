<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array Test</title>
  </head>
  <body>

<?php

$fruits = [
  'apple' => 'red',
  'orange' => 'orange',
  'strawberry' => 'red',
];
foreach($fruits as $c)
{
  print($c);
}

print('<hr \>');

$name = ['TAMA', 'MIKE', 'SHIRO'];
print( $name[1] ); // MIKE

print('<hr \>');

print("<table border>");

foreach($fruits as $f => $c)
{
  print("<tr><td>$f<td>$c");
}
print("</table>")
 ?>

  </body>
</html>
