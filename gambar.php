<?php
// Set the content type header - in this case, image/png
header('Content-Type: image/png');

// Create a blank image and add some colors
$imageWidth = 400;
$imageHeight = 300;
$image = imagecreatetruecolor($imageWidth, $imageHeight);

$backgroundColor = imagecolorallocate($image, 255, 255, 255); // White background
$textColor = imagecolorallocate($image, 0, 0, 0); // Black text
$rectangleColor = imagecolorallocate($image, 0, 0, 255); // Blue rectangle
imagerectangle($image, $rectX1, $rectY1, $rectX2, $rectY2, $rectangleColor);

// Add some text
$text = "assalam!";
$fontSize = 5; // Font size: 1 - 5 for built-in fonts
$textX = ($imageWidth - imagefontwidth($fontSize) * strlen($text)) / 2;
$textY = ($imageHeight - imagefontheight($fontSize)) / 2;
imagestring($image, $fontSize, $textX, $textY, $text, $textColor);

// Output the image to the browser
imagepng($image);

// Free up memory
imagedestroy($image);
?>
