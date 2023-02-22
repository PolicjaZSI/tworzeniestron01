<html>
<head>
    <style>
        fieldset {
            border: 2px solid black;
            width: 300px;
        }

        legend {
            font-size: 18px;
        }

        label {
            display: block;
        }
    </style>

</head>
<body>
<form>
    <fieldset>
        <legend>Roczniki</legend>
        <?php
        for ($a = 2010; $a <= 2025; $a++) {
            echo "<label><input type=\"radio\" name=\"rocznik\" value=\"$a\"> $a</label>";
        }
        ?>
    </fieldset>
</form>

</body>
</html>