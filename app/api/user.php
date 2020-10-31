<?php

if(!isset($this->post['id'])){
    return false;
}

$user = array();
if ($this->do_have('users', array('id'=>$this->post['id']))) {
    $user = $this->theodore('users', array('id' => $this->post['id']), array('username', 'avatar'));
}

echo json_encode($user);
