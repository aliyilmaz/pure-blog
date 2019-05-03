<?php

require_once 'Mind.php';
$Mind = new Mind();

// Static page routes.
$cache = array(
    'app/samantha/get_data',
    'app/data/index',
);
$Mind->route('/', 'app/views/index', $cache);
$Mind->route('admin', 'app/views/admin');

// Table creation routes.
$Mind->route('install/users', 'app/tables/users');
$Mind->route('install/posts', 'app/tables/posts');
$Mind->route('install/general', 'app/tables/general');
$Mind->route('install/categories', 'app/tables/categories');
$Mind->route('install/startx', 'app/tables/startx');

// Demo content creation routes.
$Mind->route('tests/user-add', 'app/tests/add_user');
$Mind->route('tests/post-add', 'app/tests/add_post');
$Mind->route('tests/general-add', 'app/tests/add_general');
$Mind->route('tests/category-add', 'app/tests/add_category');

// Data collection routes.
$Mind->route('tests/users', 'app/tests/data_users');
$Mind->route('tests/posts', 'app/tests/data_posts');
$Mind->route('tests/general', 'app/tests/data_general');
$Mind->route('tests/categories', 'app/tests/data_categories');

// Api routes.
// $Mind->route('api/posts:start@end', 'app/api/posts');
// $Mind->route('api/general', 'app/api/general');
// $Mind->route('api/user:id', 'app/api/user', 'app/samantha/get_data');
