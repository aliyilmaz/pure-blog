<?php

// Pinned Post
$scheme = array(
    'search'=>array(
        'or'=>array('pinstatus'=>true)
    )
);

$pinned_posts = $this->getData('posts', $scheme);

// Recent Posts
$scheme = array(
    'search'=>array(
        'or'=>array('pinstatus'=>false)
    )
);

$recent_posts = $this->getData('posts', $scheme);

// General settings read.
$general = $this->getData('general');

$title  = $general[0]['title'];
$description = $general[0]['description'];
$buttons = json_decode($general[0]['buttons'], true);
$fbuttons = json_decode($general[0]['fbuttons'], true);

?>