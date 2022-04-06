<!DOCTYPE HTML>
<html>  
<body>
  
<form method="post">
삼각형<br>
width: <input name="width"><br>
height: <input name="height"><br>
<input type="submit">

</form>
<?php echo $_POST["width"]*$_POST["height"]/2; ?><br>

<form method="post">
사각형<br>
width: <input name="width1"><br>
height: <input name="height1"><br>
<input type="submit">
<?php echo $_POST["width1"]*$_POST["height1"]; ?><br>

</form>

<form method="post">
원<br>
radius: <input name="r"><br>
<input type="submit">

</form>
<?php echo $_POST["r"]*$_POST["r"]*3.14; ?><br>

<form method="post">
직육면체<br>
width: <input name="width2"><br>
height: <input name="height2"><br>
length: <input name="length"><br>
<input type="submit">

</form>
<?php echo $_POST["width2"]*$_POST["height2"]*$_POST["length"]; ?><br>

<form method="post">
원통<br>
radius: <input name="r1"><br>
height: <input name="height3"><br>
<input type="submit">

</form>
</form>
<?php echo $_POST["width2"]*$_POST["height2"]*$_POST["length"]; ?><br>

<form method="post">
구<br>
radius: <input name="r2"><br>
<input type="submit">

</form>
<?php echo $_POST["r2"]*$_POST["r2"]*$_POST["r2"]*3.14*4/3; ?><br>
</body>
</html>