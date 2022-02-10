<?php
//创建画布
$height = 200;
$width = 200;
$im = imagecreatetruecolor($width, $height);
$white = imagecolorallocate($im, 255, 255, 255,);
$blue = imagecolorallocate($im, 0, 0, 255,);

//绘制图像
imagefill($im, 0, 0, $blue);
imageline($im, 0, 0, $width, $height, $white);
imagestring($im, 4, 50, 150, 'Sales', $white);

//输出图像
header("Content-Type: image/png");
imagepng($im);//调用此函数后，会将图像输出至浏览器
imagepng($im, "YourDirectory");//调用此函数后，不会将图像输出至浏览器，会保存图像至指定位置

//清空资源
imagedestroy($im);
?>