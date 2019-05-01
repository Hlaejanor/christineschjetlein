<?php
session_start();
$captcha_num = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
$captcha_num = substr(str_shuffle($captcha_num), 0, 4);
$_SESSION["code"] = $captcha_num;

$font_size = 25;
$img_width = 100;
$img_height = 40;

$image = imagecreate($img_width, $img_height); // create background image with dimensions
imagecolorallocate($image, 255, 255, 255); // set background color
putenv('GDFONTPATH=' . realpath('.'));
$text_color = imagecolorallocate($image, 0, 0, 0); // set captcha text color
header('Content-type: image/jpeg');
imagettftext($image, $font_size, 0, 15, 30, $text_color, 'font.ttf', $captcha_num);
imagejpeg($image);


?>