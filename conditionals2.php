<!doctype html>
<html lang="en">
<head>
    <style>
        h1 {
            border:4px solid;
            text-align: center;
        }
    </style>
</head>
<body>
<h1><?= $miesiac ?></h1>
<?php
$miesiac=rand(1,15)
?>
<?php
echo $miesiac;

switch ($miesiac) {
    case 1:
        echo "kwartal I";
        break;
    case 2:
        echo "kwartal I";
        break;
    case 3:
        echo "kwartal I";
        break;
    case 4:
        echo "kwartal II";
        break;
    case 5:
        echo "kwartal II";
        break;
    case 6:
        echo "kwartal II";
        break;
    case 7:
        echo "kwartal III";
        break;
    case 8:
        echo "kwartal III";
        break;
    case 9:
        echo "kwartal III";
        break;
    case 10:
        echo "kwartal IV";
        break;
    case 11
        echo "kwartal IV";
        break;
    case 12:
        echo "kwartal IV";
        break;
        case 13:
        echo "kwartal IV";
        break;
        case 14:
        echo "kwartal IV";
        break;
        case 15:
        echo "kwartal IV";
        break;
}
<?>

</body>
</html>
