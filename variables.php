<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<hr style="margin-bootom: 10px;">
<?php
$a = 97;
$b = 3.14;
$c = 'PHP';
?>
<style>
    .double-underline {
        border-bottom: 4px double;
    }
</style>
<h3 style="color:red"><?= $a ?> jest liczbą pierwszą</h3>
<p style="color: #FF6347">Liczba Pi zaokrąglona do dwóch miejsc po przecinku: <?= $b ?></p>
<div style="color: green"; text-decoration: underline-double;"><?= $c ?> to język skrpytowy wykonywany po stronie</div>

<li><a href="index.php">Powrót do strony głównej</a></li>

</body>
</html>