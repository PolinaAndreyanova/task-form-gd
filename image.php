<?php
include_once("functions.php");

$text = urldecode($_SERVER["QUERY_STRING"]);
$arStrings = textHandler($text);

$font = getcwd() . "/times.ttf";

$step = 50;
$w = 500 + $step * 2;
$h = 40 * (count($arStrings) + 1) + $step * 2;
$im = imageCreate($w, $h);

$back = imageColorAllocate($im, 96, 143, 145);
imagefilledrectangle($im, 0, 0, $w - 1, $h - 1, $back);

$front = imageColorAllocate($im, 255, 255, 255);
imagefilledrectangle($im, $step, $step, $w - 1 - $step, $h - 1 - $step, $front);

$black = imageColorAllocate($im, 0, 0, 0);

foreach ($arStrings as $key => $value) {
    imagettftext($im, 30, 0, 10 + $step, 40 * ($key + 1) + $step, $black, $font, $value);
}

header("Content-type: image/png");
imagePng($im);