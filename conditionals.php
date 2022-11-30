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
if ($losowa >=20) {
    echo "wylosowana liczba jest wieksza lub rowna 20";
}
else {
    echo "wylosowana liczba jest mniejsza niz 20";
}
?>

<h1><?=$losowa ?></h1>
<h2><?=if ?></h2>
</body>
</html>
