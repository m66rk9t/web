<!DOCTYPE html>
<html lang="zh">

<head>
    <title>Secret Page</title>
    <meta charset="utf-8" />
</head>

<body>
    <?php
        if ((!isset($_POST["name"])) || (!isset($_POST["password"]))) {
    ?>
    <h1>Please Log In</h1>
    <p>Page is scret.</p>
    <form action="secret.php" method="post">
        <p>
            <lable for="name">Username:</lable>
            <input type="text" name="name" id="name" size="15" />
        </p>
        <p><label for="password">Password:</label>
            <input type="password" name="password" id="password" size="15" />
        </p>
        <input type="submit" name="submit" value="Log In" />
    </form>
    <?php
    } else if (($_POST["name"] == "name") && ($_POST["password"] == "passwd")) {
        echo "<h1>Here it is!</h1>\n".
        "<p>I bet you are glad you can see this scret page.</p>";
    } else {
        echo "<h1>Go Away!</h1>\n".
        "<p>You are not authorized to use this resource.</p>";
    }
    ?>
</body>

</html>