<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8" />
    <title>Site Submission Results</title>
</head>

<body>
    <h1>Site Submission Results</h1>
    <?php
    //从表单域获取数据
    $url = $_POST["url"];
    $email = $_POST["email"];

    //检查URL
    $url = parse_url($url);
    $host = $url["host"];

    if (!($ip = gethostbyname($host))) {
        echo "Host for URL does not have valid IP address.";
        exit;
    }

    //输出IP地址
    echo "Host(".$host.") is at IP ".$ip."<br />";
    
    //检查电子邮箱地址
    $email = explode("@", $email);
    $emailhost = $email[1];

    if (!getmxrr($emailhost, $mxhostsarr)) {
        echo "Email address is not at valid host";
        exit;
    }

    echo "Email is delivered via: <br>\n<ul>";
    foreach ($mxhostsarr as $mx) {
        echo "<li>".$mx."</li>\n";
    }
    echo "</ul>\n";
    echo "<p>All submitted details are ok.</p>\n";
    echo "<p>Thank you for submitting your site.</p>\n<p>It will be visited by one of our staff members soon.</p>";
    
    ?>
</body>

</html>