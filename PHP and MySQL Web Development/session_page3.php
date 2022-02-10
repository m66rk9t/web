<?php
//启动会话
session_start();

//判断会话变量是否存在
if (!isset($_SESSION["session_var"])) {
    echo "<p>\$_SESSION['session_var'] has been destoried.</p>";
}

//销毁会话ID
session_destroy();
?>