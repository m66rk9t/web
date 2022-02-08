<?php
/*基于生日计算年龄，使用UNIX时间戳进行计算*/
//设置出生年月日
$day = 23;
$month = 7;
$year = 1921;

//将出生日期格式化为IS0 8601格式
$bday = date("c", mktime(0, 0, 0, $month, $day, $year));
//登录MySQL
$db = mysqli_connect("localhost", "bookorama", "bookorama123");
//执行查询
$query = mysqli_query($db, "select datediff(now(), '$bday')");
//储存查询结果
$age = mysqli_fetch_array($query);
//输出
echo "Current age is ".floor($age[0] / 365.25).".<br />";
?>