<?php

$locate= 'logo.jpg';

$image = imagecreatefromjpeg("$locate");

if ($image) {

echo '<PRE STYLE="font: 1px/1px Courier New;">';

$asciichars = array("@", "#", "+", "*", ";", ":", ",", ".", "`", " ");

$width = imagesx($image);

$height = imagesy($image);

for($y = 0; $y < $height; ++$y) {

for($x = 0; $x < $width; ++$x) {

$thiscol = imagecolorat($image, $x, $y);

$rgb = imagecolorsforindex($image, $thiscol);

$brightness = $rgb[�red�] + $rgb[�green�] + $rgb[�blue�];

$brightness = round($brightness / 85);

$char = $asciichars[$brightness];

echo $char;

}

echo �\n�;

}

echo '</PRE>';

}

?>
