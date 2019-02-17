<?php

// Pinned Post
$scheme = array(
    'search'=>array(
        'equal'=>array('pinstatus'=>true)
    )
);

$pinned_posts = $this->get('posts', $scheme);

// Recent Posts
$scheme = array(
    'search'=>array(
        'equal'=>array('pinstatus'=>false)
    )
);

$recent_posts = $this->get('posts', $scheme);

// General settings read.
$general = $this->get('general');

$title  = $general[0]['title'];
$description = $general[0]['description'];
$buttons = json_decode($general[0]['buttons'], true);
$fbuttons = json_decode($general[0]['fbuttons'], true);

?>