<?php

$scheme = array(
    'id:increments',
    'title:string',
    'content:small',
    'author:small',
    'tags:small',
    'category:string',
    'pimages:medium',
    'pinstatus:string',
    'created_at:string',
    'updated_at:string'
);

$this->tableCreate('posts', $scheme);

?>