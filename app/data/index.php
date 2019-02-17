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

?>