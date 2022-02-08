<?php
/*截取中文名字符串中的字符*/
$name = $_POST["name"];
$length = mb_strlen($name, "utf-8");
$name = mb_substr($name, $length - 2, 2, "utf-8");
echo "<h1>" . $name . "</h1>";
?>