<html>
 <head>
  <meta charset="utf-8">
  <title> IU4-13b Khokhlunova Olga Variant 7</title>
 </head>
 <body>
<h1>Khokhlunova Olga Dmitrievna</h1>
<h1>Variant 7</h1>
<h1>Zadacha 1</h1>
    <?php

echo "<table border=1>";
For($w=1;$w<101;$w++)
{
	echo "<tr>";
	For($n=1;$n<101;$n++){
echo "<td> $w*$n </td> ";}echo "</tr>";};
 echo "</table>";   ?>
<h1>Zadacha 2</h1>
<form method= "POST">
Введите значение:<br>    <input type="number" name="n1" min="-999999"max="9999999" required><br>
Что вы хотите?
<input type="radio" name="v" value="0" checked> Квадрад
<br>
<input type="radio" name="v" value="1"> Куб
<br>
<input type="radio" name="v" value="10"> Корень
<br>
<input type="submit" value="Отправить"></form>
<?php 
$m=9;
if (isset($_POST["v"])) {
$m = ($_POST["v"]);
};
if ($m=="0")
{ echo "X^2:   ","<br>", $_POST["n1"]*$_POST["n1"] ,"<br>";};

if ($m==1)
{echo "X^3:   ","<br>",$_POST["n1"]*$_POST["n1"]*$_POST["n1"] ,"<br>";};

if ($m==10)
{if (-1<($_POST["n1"]))
{echo "Kor:   ","<br>", sqrt($_POST["n1"]) ;
"<br>";}else {echo "error";};}

?>
</form>
</body>
</html>
