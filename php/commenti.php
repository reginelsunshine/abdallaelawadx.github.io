<?php
$n=$_POST['nam'];
$cm=$_POST["com"];

$ourFileName = "news.html";
$ourFileHandle = fopen($ourFileName, 'a') or die("can't open file");
fwrite($ourFileHandle,"$n: $cm <br>");
fclose($ourFileHandle);?>
