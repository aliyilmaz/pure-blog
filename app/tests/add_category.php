<?php

$data = array(
    array(
        'text'=>'Uncategorized', 
        'class_name'=>'post-category', 
        'created_at'=>$this->timestamp
    ),
    array(
        'text'=>'CSS', 
        'class_name'=>'post-category-design', 
        'created_at'=>$this->timestamp
    ),
    array(
        'text'=>'Pure', 
        'class_name'=>'post-category-pure', 
        'created_at'=>$this->timestamp
    ),
    array(
        'text'=>'JavaScript', 
        'class_name'=>'post-category-js', 
        'created_at'=>$this->timestamp
    ),
    array(
        'text'=>'YUI', 
        'class_name'=>'post-category-yui', 
        'created_at'=>$this->timestamp
    )
);

$this->insert('categories', $data);