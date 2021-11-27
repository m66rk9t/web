<?php
$openFile = fopen("music.txt", "r") or die ("Cannot open file!");
echo fread($openFile, filesize("music.txt"));
fclose($openFile);
?>