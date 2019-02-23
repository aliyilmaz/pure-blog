<?php

$scheme = array(
    'limit'=>array(
        'start'=>$this->post['start'],
        'end'=>$this->post['end']
    ),
    'format'=>'json'
);

$posts = $this->get('posts', $scheme);

echo $posts;

?>