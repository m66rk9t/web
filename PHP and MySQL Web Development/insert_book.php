<!DOCTYPE html>
<html>

<head>
    <title>Book-O-Rama Book Entry Results</title>
    <meta charset="utf-8" />
</head>

<body>
    <h1>Book-O-Rama Book Entry Results</h1>
    <?php
    if (
        !isset($_POST["ISBN"]) || !isset($_POST["Author"])
        || !isset($_POST["Title"]) || !isset($_POST["Price"])
    ) {
        echo "<p>You have nor enterd all the required details.<br />
        Please go back and try again.</p>";
        exit;
    }

    $isbn = $_POST["ISBN"];
    $author = $_POST["Author"];
    $title = $_POST["Title"];
    $price = $_POST["Price"];
    $price = doubleval($price);

    @$db = new mysqli("localhost", "bookorama", "bookorama123", "books");//创建数据库链接

    if (mysqli_connect_error()) {
        echo "<p>Error: Could not connect to database.<br />
        Please go back and try again.</p>";
        exit;
    }

    $query = "INSERT INTO Books VALUES (?, ?, ?, ?)"; //设置插入语句
    $stmt = $db->prepare($query); //构造statement对象
    $stmt->bind_param('sssd', $isbn, $author, $title, $price); //绑定参数
    $stmt->execute(); //执行插入语句

    if ($stmt->affected_rows > 0){
        echo "<p>Book inserted into database.</p>";
    }else {
        echo "<p>An error has occurred.<br>The item was not added.</p>";
    }

    $db->close();//关闭数据库链接
    ?>
</body>

</html>