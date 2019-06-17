<?php

$scheme = array(
    'id:increments',
    'parent:string',
    'text:string',
    'href:string',
    'description:small',
    'class_name:string',
    'created_at:string',
    'updated_at:string',
);

$this->tableCreate('categories', $scheme);
