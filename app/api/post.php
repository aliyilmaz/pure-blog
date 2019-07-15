<?php

if(!isset($this->post['id'])){
    return false;
}

$post = array();
if ($this->do_have('posts', $this->post['id'])) {
    $post = $this->samantha('posts', array('id' => $this->post['id']));
}

echo json_encode($post);
