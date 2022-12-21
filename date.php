<head>
    <style>
        table {
            border-collapse: collapse;
        }
        td{
            border:solid 2px;
            padding:20px
        }
    </style>

</head>
<body>
<center><caption>31</caption>
    <?php
$miesiac = date('n');
$dnimiesiac = date('t', strtotime("$miesiac-01"));
?>
<?php
echo '<table>';
for ($i = 1; $i <= $dnimiesiac; $i++) {
    echo '<td>';
    echo $i;
    if ($i % 7 == 0)
        echo '<tr>';
}
?>
</center>

</body>
</html>
