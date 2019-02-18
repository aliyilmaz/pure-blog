<?php

function get_category($table, $category){
    
    global $Mind;

    $schema = array(
        'search'=>array(
            'equal'=>array($Mind->increments($table)=>$category)
        )
    );

    $data = $Mind->get($table, $schema);

    return $data[0];
}