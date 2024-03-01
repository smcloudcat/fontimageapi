<?php
//BY：云猫
//QQ：3522934828
//项目地址https://gitee.com/ximami/fontimageapi
header('Content-Type: image/png');
$image = imagecreatetruecolor($_REQUEST["w"], $_REQUEST["h"]);
$bgColor = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $bgColor);
$textColor = imagecolorallocate($image, 0, 0, 0);
$text = $_REQUEST["text"];
$fontPath = './font.ttf';
imagettftext($image, $_REQUEST["s"], 0, 10, 40, $textColor, $fontPath, $text);
imagepng($image);
imagedestroy($image);
?>