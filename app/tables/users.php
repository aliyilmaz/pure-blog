<?php

$scheme = array(
    'id:increments',
    'username:string',
    'password:string',
    'avatar:small',
    '_token:small',
    'created_at:string',
    'updated_at:string'
);

$this->createtable('users', $scheme);

?>