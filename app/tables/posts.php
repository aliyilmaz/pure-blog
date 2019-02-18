<?php

$scheme = array(
    'id:increments',
    'title:string',
    'content:small',
    'author:small',
    'tags:small',
    'category:string',
    'pinstatus:string',
    'created_at:string',
    'updated_at:string'
);

$this->createtable('posts', $scheme);

?>