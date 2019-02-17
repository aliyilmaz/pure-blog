<?php

function get_user($id, $column){
    
    global $Mind;

    $schema = array(
        'search'=>array(
            'equal'=>array('id'=>$id)
        )
    );

    $data = $Mind->get('users', $schema);

    return $data[0][$column];
}