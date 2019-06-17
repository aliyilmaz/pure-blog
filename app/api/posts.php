<?php

$scheme = array(
    'limit'=>array(
        'start'=>$this->post['start'],
        'end'=>$this->post['end']
    ),
    'format'=>'json'
);

$posts = $this->getData('posts', $scheme);

echo $posts;

?>