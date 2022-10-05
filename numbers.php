<!doctype html>
<html lang="en">
<head>
</head>
<body>
<?php
$x = 5985;
echo "zmienna ".$x." ma wartosc 5985 a funkcja is_int zawiera dla niej wynik ";
var_dump(is_int($x));"<br>";
echo "<br>";
$x = 51.85;
echo "zmienna ".$x." ma wartosc 51.85 a funkcja is_int zawiera dla niej wynik ";
var_dump(is_int($x));"<br>";
echo "<br>";
echo "<br>";

$x = 10.365;
echo "zmienna ".$x." ma wartosc 10.365 a funkcja is_float zawiera dla niej wynik ";
var_dump(is_float($x));"<br>";
echo "<br>";
$x = 10365;
echo "zmienna ".$x." ma wartosc 10365 a funkcja is_float zawiera dla niej wynik ";
var_dump(is_float($x));"<br>";
echo "<br>";
echo "<br>";


$x = 59.85 + 100;
echo "zmienna ".$x." ma wartosc ".$x. " a funkcja is_float zawiera dla niej wynik ";
var_dump(is_numeric($x));
echo "<br>";

echo"<br>";
echo "Stała PHP_INT_MAX ma wartość: ".PHP_INT_MAX;
echo"<br>";
echo "Stała PHP_INT_MIN ma wartość: ".PHP_INT_MIN;
echo"<br>";
echo "Stała PHP_INT_SIZE ma wartość: ".PHP_INT_SIZE;
echo"<br>";
echo "Stała PHP_FLOAT_MAX ma wartość: ".PHP_FLOAT_MAX;
echo"<br>";
echo "Stała PHP_FLOAT_MIN ma wartość: ".PHP_FLOAT_MIN;
echo"<br>";
echo "Stała PHP_FLOAT_DIG ma wartość: ".PHP_FLOAT_DIG;
echo"<br>";
echo "stała PHP_FLOAT_EPSTILON ma wartość: ".PHP_FLOAT_EPSILON;
echo"<br>";


?>

</body>
</html>
