<!DOCTYPE html>
<html>
<head>
    <style>
        fieldset {
            border: 3px solid;
            color: green;
        }
        legend {
            font-size: 20px;
        }
    </style>
</head>
<body>
<form method="post">
    <fieldset>


        <?php
        foreach (range( 0, 100, 10) as $a) {
            echo '<label><input type="checkbox" name="liczba[]" value="'.$a.'"';
            if (isset($_POST['liczba']) && in_array($a, $_POST['liczba']))
                echo 'checked';
            echo '>'.$a.'</label>';
        }
        ?><br><br>
       <input type="submit" value="Wybierz">
        <legend>Liczby</legend>
        <p>
            <?php
            if (isset($_POST['liczba']))
                echo 'Te liczby zostaly wybrane: '.implode(', ', $_POST['liczba']);
            else
                echo 'Zadna liczba nie zostala wybrana';

            ?>
        </p>
        <br>
    </fieldset>
</form>
</body>
</html>