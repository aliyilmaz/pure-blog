<?php

if(!isset($this->post['id'])){
    return false;
}

$user = array();
if ($this->do_have('users', $this->post['id'])) {
    $user = $this->samantha('users', array('id' => $this->post['id']), array('username', 'avatar'));
}

echo json_encode($user);
