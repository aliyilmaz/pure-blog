<?php

if(!$this->is_table('categories') OR !$this->is_table('general') OR !$this->is_table('posts') OR !$this->is_table('users')){

    $scheme = array(
        'app/tables/users',
        'app/tables/posts',
        'app/tables/general',
        'app/tables/categories',
        'app/tests/add_user',
        'app/tests/add_post',
        'app/tests/add_general',
        'app/tests/add_category',
    );
    
    $this->mindload($scheme);
    
    $this->redirect();

}
