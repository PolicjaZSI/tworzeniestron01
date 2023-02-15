<!doctype html>
<head>
</head>
<body>

<form action="formularz.php" method = "post">
    <label for="jed">Pierwsza</label><br>
    <input type="text" id="jed" name="jed"<br><br>
    <label for="dw">Druga</label><br>
    <input type="text" id="dw" name="dw"<br><br>
    <label for="trz">Trzecia</label><br>
    <input type="text" id="trz" name="trz"<br><br>
    <input type="submit" value ="submit">

</form>



</body>
</html>
<pre>

<?php
if
    ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST['jed']);
    var_dump($_POST['dw']);
    var_dump($_POST['trz']);

    var_dump(trim($_POST['jed']));
    var_dump(stripslashes($_POST['dw']));
    var_dump(htmlspecialchars($_POST['trz']));


}
    ?>
</pre>


