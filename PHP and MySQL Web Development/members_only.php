<?php
//启动会话
session_start();
?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8" />
    <title>Members Only</title>
</head>

<body>
    <h1>Members Only</h1>
    <?php
    //检查会话变量是否存在
    if (isset($_SESSION["valid_user"])) {
        echo "<p>You are logged in as " . $_SESSION["valid_user"] . "</p>\n";
        echo "<p><em>Members-Only content goes here.</em></p>\n";
    } else {
        echo "<p>You are not logged</p>\n";
        echo "<p>Only logged in members may see this page.</p>\n";
    }
    ?>
    <p><a href="authmain.php">Back to Home Page</a></p>
</body>

</html>