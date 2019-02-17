<?php

function get_avatar($id){
    
    global $Mind;

    $schema = array(
        'search'=>array(
            'equal'=>array('id'=>$id)
        )
    );

    $avatar = $Mind->get('users', $schema);

    return $avatar[0]['avatar'];
}