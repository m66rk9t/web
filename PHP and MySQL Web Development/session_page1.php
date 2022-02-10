<?php
//启动会话
session_start();

//注册会话变量
$_SESSION["session_var"] = "Hello World!";

//使用会话变量
echo "<p>The content of \$_SESSSION['session_var'] is ".$_SESSION["session_var"]."</p>";
?>
<a href="session_page2.php">Next Page</a>