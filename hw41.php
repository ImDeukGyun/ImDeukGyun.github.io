<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2> 수의 합과 팩토리얼 (밑에 에러떠도 값은 나옵니다.)</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  값 : <input name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <input type="submit" name="결과" value="결과">  
</form>

<?php
echo "<h2>Your Input:</h2>";
$n = $_POST["name"];
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

$n = $_POST["name"];
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