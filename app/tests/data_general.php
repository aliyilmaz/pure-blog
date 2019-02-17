<?php

$general = $this->get('general');

$title = $general[0]['title'];
$description = $general[0]['description'];
$buttons = json_decode($general[0]['buttons'], true);
$fbuttons = json_decode($general[0]['fbuttons'], true);

echo '<h1>TITLE</h1>';
echo $title;

echo '<h1>DESCRIPTION</h1>';
echo $description;

echo '<h1>BUTTONS</h1>';
echo '<pre>';
print_r($buttons);
echo '</pre>';

echo '<h1>FOOTER BUTTONS</h1>';
echo '<pre>';
print_r($fbuttons);
echo '</pre>';

?>