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

echo '<h1>PINNED POST</h1>';
echo '<pre>';
print_r($pinned_posts);
echo '</pre>';

echo '<h1>RECENT POST</h1>';
echo '<pre>';
print_r($recent_posts);
echo '</pre>';

?>