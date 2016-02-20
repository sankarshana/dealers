<?php $file = file_get_contents('base64string.txt', true); //your data in base64 'data:image/png....';
$img = str_replace('data:image/png;base64,', '', $file);
file_put_contents('imag.png', base64_decode($img));?>