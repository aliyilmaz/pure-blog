<?php

$user = array();
if ($this->do_have('users', $this->post['id'])) {
    $user = get_data('users', array('id' => $this->post['id']), array('username', 'avatar'));
}

echo json_encode($user);
