<?php

$scheme = array(
    'id:increments',
    'username:string',
    'password:string',
    'email:string',
    'avatar:small',
    '_token:small',
    'created_at:string',
    'updated_at:string'
);

$this->tableCreate('users', $scheme);

?>