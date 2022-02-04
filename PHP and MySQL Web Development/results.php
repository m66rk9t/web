<!DOCTYPE html>
<html>

<head>
    <title>Book-O-Rama Search Results</title>
    <meta charset="utf-8" />
</head>

<body>
    <h1>Book-O-Rama Search Results</h1>
    <?php
    $searchtype = $_POST["searchtype"];
    $searchterm = $_POST["searchterm"];

    if (!$searchtype || !$searchterm){
        echo "<p>You have not entered search details.<br />
        Please go back and try again.</p>";
        exit;
    }

    switch ($searchtype){
        case "Author":
        case "Title":
        case "ISBN": break;
        default: echo "<p>That is not a valid search type.<br>
        Please go back and try again.</p>";
        exit;
    }

    //创建数据库链接
    $db = new mysqli("localhost", "bookorama", "bookorama123", "books");
    if (mysqli_connect_errno()){
        echo "<p>Error: Could not connect to database.<br />
        Please try again later.</p>";
        exit;
    }

    $query = "SELECT ISBN, Author, Title, Price FROM Books WHERE $searchtype = ?";//设置查询语句
    $stmt = $db->prepare($query);//构造statement对象
    $stmt->bind_param("s", $searchterm);//绑定参数
    $stmt->execute();//执行查询
    $stmt->store_result(); //储存查询结果
    $stmt->bind_result($isbn, $author, $title, $price);//绑定查询结果对应的参数

    echo "<p>Number of books found: ".$stmt->num_rows."</p>";
    //将查询结果赋于绑定的对应的变量
    while ($stmt->fetch()){
        echo "<p><strong>Title: ".$title."</strong>";
        echo "<br />Author: ".$author;
        echo "<br />ISBN: ".$isbn;
        echo "<br />Price: ".number_format($price, 2)."</p>";
    }
    //释放结果集与关闭数据库链接
    $stmt->free_result();
    $db->close();
    ?>
</body>

</html>