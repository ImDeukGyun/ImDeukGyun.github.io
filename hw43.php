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
<h2> 피보나치 수열 </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  값 : <input name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <input type="submit" name="결과" value="결과">  
</form>
<?php

 $a = 1;
 $b = 1;
 $num = 0;
 $num = $_POST["name"];
 
 for($i = 0; $i < $num; $i++)
 {
 $c = $b +$a;
 echo $a." ";
 $a = $b;
 $b = $c;
 }

?> 
</body>
</html>