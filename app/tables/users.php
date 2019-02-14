<?php

$scheme = array(
    'id:increments',
    'username:string',
    'password:string',
    '_token:small',
    'created_at:string',
    'updated_at:string'
);

$this->createtable('users', $scheme);

?>