<?php

$data = array(
    array(
        'text'=>'Uncategorized', 
        'class_name'=>'post-category', 
        'created_at'=>date('d-m-Y H:i:s')
    ),
    array(
        'text'=>'CSS', 
        'class_name'=>'post-category-design', 
        'created_at'=>date('d-m-Y H:i:s')
    ),
    array(
        'text'=>'Pure', 
        'class_name'=>'post-category-pure', 
        'created_at'=>date('d-m-Y H:i:s')
    ),
    array(
        'text'=>'JavaScript', 
        'class_name'=>'post-category-js', 
        'created_at'=>date('d-m-Y H:i:s')
    ),
    array(
        'text'=>'YUI', 
        'class_name'=>'post-category-yui', 
        'created_at'=>date('d-m-Y H:i:s')
    )
);

$this->insert('categories', $data);