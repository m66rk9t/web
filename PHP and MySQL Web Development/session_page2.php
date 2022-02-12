<?php
//启动会话
session_start();

//判断会话变量是否存在
if (isset($_SESSION["session_var"])) {
    echo "<p>The content of \$_SESSSION['session_var'] is ".$_SESSION["session_var"]."</p>";
}

//销毁会话变量
unset($_SESSION["session_var"]);
?>
<a href="session_page3.php">Next Page</a>