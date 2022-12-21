<!doctype html>
<html lang="en">
<head>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 2px solid black;
            padding: 20px;
        }
    </style>
</head>
<body>

<?php
$dni = array("Pon", "Wto", "Sro", "Czw", "Pia", "Sob", "Nie");

echo "<table>";
    echo "<tr>";

        foreach ($dni as $dzien)
        echo "<td>$dzien</td>";
    echo "</table>";
?>
</body>
</html>