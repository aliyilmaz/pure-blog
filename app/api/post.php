<?php

if(!isset($this->post['id'])){
    return false;
}

$post = array();
if ($this->do_have('posts', array('id'=>$this->post['id']))) {
    $post = $this->theodore('posts', array('id' => $this->post['id']));
}

echo json_encode($post);
