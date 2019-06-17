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

echo '<h1>PINNED POST</h1>';
echo '<pre>';
print_r($pinned_posts);
echo '</pre>';

echo '<h1>RECENT POST</h1>';
echo '<pre>';
print_r($recent_posts);
echo '</pre>';

?>