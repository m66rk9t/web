<?php
//启动会话
session_start();

//使用会话变量
echo "<p>The content of \$_SESSSION['session_var'] is ".$_SESSION["session_var"]."</p>";

//销毁会话变量
unset($_SESSION["session_var"]);
?>
<a href="session_page3.php">Next Page</a>