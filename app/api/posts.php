<?php
if(!isset($this->post['start'])){
    $this->post['start'] = 0;
}

if(!isset($this->post['end'])){
    $this->post['end'] = 0;
}

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