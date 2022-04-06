<!DOCTYPE html>
<html>
<body>


<?php
$n = $_GET["name"];
$sum = 0;
$prod = 0;

for ($x = 1; $x <= $n-1; $x+=1) {
  echo "$x+";
  $prod += $x;
  $sum = $prod;
}
$sum = $prod += $n;
print "$n=$sum<br>"
?>
<?php

$n = $_GET["name"];
$sum = 0;
$prod = 1;

for ($x = 1; $x <= $n-1; $x+=1) {
  echo "$x*";
  $prod *= $x;
  $sum = $prod;
}
$sum = $prod *= $n;

print "$n=$sum"
?>  

</body>
</html>