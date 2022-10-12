<!doctype html>
<html lang="en">
<head>
    <style>
        h1{
            text-align: center;
            color: darkmagenta;
        }
    </style>
</head>
<body>
<?php
$losowa=rand(1,30);
?>
<?php
if ($losowa>=20); {
    echo "wylosowana liczba jest wieksza lub rowna 20";
}
else
?>

<h1><?=$losowa ?></h1>
</body>
</html>
