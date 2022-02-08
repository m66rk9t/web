<?php
/*日历转换*/
//首先从公历转换成儒略日历
$jd = gregoriantojd(7, 23, 1921);
//再将儒略日历转换成罗马儒略历
$juilan = jdtojulian($jd);
//输出
echo "<p>".$juilan."</p>";
?>