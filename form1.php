<!doctype html>
<html lang="en">
<head>
</head>
<body>
<fieldset>
    <legend>lorem50</legend>
    <form onsubmit="return false;">
        <textarea cols="50" rows="5">sdfsdfsdfsdfdsfdsf.</textarea>
        <br>
        <button onclick="sendForm()">Wyślij</button>
    </form>
    <p id="output1"></p>
    <p id="output2"></p>
</fieldset>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['textfield'];
}    echo 'Wprowadzony tekst: ' . $text;

?>

</body>
</html>
