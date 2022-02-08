<?php
/*基于生日计算年龄，使用UNIX时间戳进行计算*/
//设置出生年月日
$day = 23;
$month = 7;
$year = 1921;

//计算出生日期的时间戳
$bday = mktime(0,0,0,$month,$day,$year);
//计算当前日期的时间戳
$now = time();
//求差
$age = $now - $bday;
//换算、取整
$age = floor($age / (365 * 24 * 60 * 60));
//输出
echo "Current age is ".$age.".<br />";
?>