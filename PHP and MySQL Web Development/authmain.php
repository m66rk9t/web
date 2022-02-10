<?php
//启动会话
session_start();

//判断表单域变量是否存在
if (isset($_POST["userid"]) && isset($_POST["password"])) {
    //获取ID和密码
    $userid = $_POST["userid"];
    $password = $_POST["password"];
    $password = password_hash($password, PASSWORD_BCRYPT);
    
    //连接MySQL，替换user、password、database
    $db_conn = mysqli_connect("localhost", "user", "password", "database");
    if (mysqli_connect_errno()) {
        echo "Connection to database failed:" . mysqli_connect_errno();
        exit;
    }
    //设置查询，替换table
    $query = "select * from table where name = '" . $userid . "' and password = '" . $password . "'";
    //执行查询并保存查询结果
    $result = $db_conn->query($query);
    if ($result->num_rows) {
        //创建会话变量
        $_SESSION["valid_user"] = $userid;
    }
    //关闭链接
    $db_conn->close();
}
?>

<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8" />
    <title>Home Page</title>
    <style type="text/css">
        fieldset {width: 50%; border: 2px solid #ff0000;}
        legend {font-weight: bold; font-size: 125%;}
        label {width: 125px; float: left; text-align: left; font-weight: bold;}
        input {border: 1px solid #000000;}
        button {margin-top: 12px;}
    </style>
</head>

<body>
    <h1>Home Page</h1>
    <?php
    if (isset($_SESSION["valid_user"])) {   //成功登录
        echo "<p>You are logged in as: ".$_SESSION["valid_user"]."<br />";
        echo "<a href='logout.php'>Log out</a></p>";
    } else {    //登陆失败
        if (isset($userid)) {   //当前用户不存在
            echo "<p>Could not log you in.</p>";
        } else {    //未登录任何用户
            echo "<p>You are not logged in.</p>";
        }

        //提供登录框
        echo "<form action='authmain.php' method='post'>\n";
        echo "<fieldset>\n";
        echo "<legent>Login Now!</legend>\n";
        echo "<p><label for='userid'>UserID:</label>\n";
        echo "<input type='text' name='userid' id='userid' size='30'/></p>\n";
        echo "<p><label for='password'>Password:</label>\n";
        echo "<input type='password' name='password' id='password' size='30'/></p>\n";
        echo "</fieldset>\n";
        echo "<button type='submit' name='login'>Login</button>\n";
        echo "</form>\n";
    }
    ?>
    <p><a href="members_only.php">Go to Members Section</a></p>
</body>

</html>