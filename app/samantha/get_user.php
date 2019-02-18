<?php

function get_user($table, $id){
    
    global $Mind;

    $schema = array(
        'search'=>array(
            'equal'=>array($Mind->increments($table)=>$id)
        )
    );

    $data = $Mind->get($table, $schema);

    return $data[0];
}