<?php
$greetings = array("你好！", "Hello!", "Bonjour!", "Ciao!", "Hallo!");
mt_srand((double)microtime() * 1000000);
$number = mt_rand(0, 4);
$greet = $greetings[$number];
echo "$greet";
?>