<!DOCTYPE html>
<html>
<body>


<?php
$n = 0;
$dada = array (rand(10,100));
sort ($dada);

$clength = count($dada);
for($n = 0; $n < $clength; $n++) {
  echo $dada[$n];
  $dada = array (rand(10,100));
  echo "<br>";
  echo $dada[$n];
}
?>  

</body>
</html>