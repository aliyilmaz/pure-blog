<?php

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
