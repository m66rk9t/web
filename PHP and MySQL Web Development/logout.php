<?php
//启动会话
session_start();
//访问并保存会话变量的zhi
$old_user = $_SESSION["valid_user"];
//销毁会话变量
unset($_SESSION["valid_user"]);
//销毁会话ID
session_destroy();
?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8" />
    <title>Log Out</title>
</head>

<body>
    <h1>Log Out</h1>
    <?php
    if (!empty($old_user)) {
        echo "<p>You have been loged out.</p>\n";
    } else {
        echo "<p>You were not logged in, and so have not been logged out.</p>\n";
    }
    ?>
    <p><a href="authmain.php">Back to Home Page</a></p>
</body>

</html>