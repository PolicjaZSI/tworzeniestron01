<!doctype html>
<html lang="en">
<head>
</head>
<body>
<?php
$znaki=str_split("Witaj swiecie!");

foreach($znaki as $znak)
{
    echo"<td>".$znak."</td>";
}
?>

</body>
</html>
