<?php
header('Content-Type: image/jpeg'); 

require_once dirname(__FILE__) . '/lib/WideImage.php';

$img = WideImage::load($_GET['img']);

$img = $img->resize($_GET['w'], $_GET['h'], 'outside');
$img = $img->crop('center', 'center', $_GET['w'], $_GET['h']);

$img->output('jpg');

?>