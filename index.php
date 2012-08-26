<?php
require 'lib/functions.php';

if (($_GET['d'] == "inc") || $_GET['dir'] == "lib") $_GET['d'] = NULL;
if (!$_GET['d']) die("No presentation selected");

$dir = $_GET['d'];
$slide = file_get_contents($dir.'/slides');
$info = explode("\n", $slide);
$slide = str_replace($info[0], '', $slide);
$slide = str_replace($info[1], '', $slide);
$slide = str_replace($info[2], '', $slide);
$slide = str_replace($info[3], '', $slide);
echo deck_header($info[0], $info[1], $info[2], $info[3]);

$slide = Markdown($slide);
$old = array("<li>", "<p>", "<h3>", "<hr />");
$new = array("<li class=\"slide\">", "<p class=\"slide\">", "<h3 class=\"slide\">", "</section>\n\n<section class=\"slide\">");
$slide = str_replace($old, $new, $slide);
echo $slide;

echo deck_footer();
?>

