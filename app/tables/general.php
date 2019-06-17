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

$this->tableCreate('general', $scheme);

// A blank record is added.
$this->insert('general', array('created_at'=>date('d-m-Y H:i:s')));

?>