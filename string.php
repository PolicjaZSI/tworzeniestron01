<!doctype html>
<html lang="en">
<head>
</head>
<body>
<?php
define("DOBRA_RADA","Bez chleba to sie nie najesz.");
echo DOBRA_RADA."<br>";

echo strlen (DOBRA_RADA)."<br>";
echo str_word_count (DOBRA_RADA)."<br>";
echo strrev (DOBRA_RADA)."<br>";
echo strpos(DOBRA_RADA,"to")."<br>";
echo str_replace (DOBRA_RADA, miesa)."<br>";
?>
</body>
</html>