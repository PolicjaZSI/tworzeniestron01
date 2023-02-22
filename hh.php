<!doctype html>
<html lang="en">
<head>
</head>
<body>

</body>
</html>
<?php
$months = array ("Styczen","Luty","Marzec","Kwiecien","Maj","Czerwiec","Lipiec","Sierpien","Wrzesnien","Pazdziernik","Listopad","Grudzien");
$currentMonth = date('m');
?>
<select>
    <?php
    foreach($months as $key => $month) {
        $selected = ($key+1 == $currentMonth) ? 'selected' : '';
        echo '<option value="'.$month.'" '.$selected.'>'.$month.'</option>';
    }
    ?>
</select>

