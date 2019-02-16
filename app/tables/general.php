<?php

$scheme = array(
    'id:increments',
    'title:string',
    'description:small',
    'buttons:small',
    'fbuttons:small',
    'created_at:string',
    'updated_at:string'
);

$this->createtable('general', $scheme);

?>