<?php
$title = $_POST["title"];
$composer = $_POST["composer"];
$performer = $_POST["performer"];
$openFile = fopen("music.txt", "w") or die ("Cannot open file!");
$txt = "Your favourite music is ".$title.", ";
fwrite($openFile, $txt);
$txt = "and the composer is ".$composer.", ";
fwrite($openFile, $txt);
$txt = "the performer is ".$composer.".";
fwrite($openFile, $txt);
fclose($openFile);
echo "Write successfully, you can back and print now!"
?>