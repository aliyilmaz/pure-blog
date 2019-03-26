<?php

require_once 'Mind.php';
use Mind\Mind;

$Mind = new Mind();

// Static page routes.
$cache = array(
    'app/samantha/get_data',
    'app/data/index',
);
$Mind->route('/', 'app/views/index', $cache);
$Mind->route('admin', 'app/views/admin');

// Table creation routes.
$Mind->route('install/users', 'app/views/index', 'app/tables/users');
$Mind->route('install/posts', 'app/views/index', 'app/tables/posts');
$Mind->route('install/general', 'app/views/index', 'app/tables/general');
$Mind->route('install/categories', 'app/views/index', 'app/tables/categories');

// Demo creation routes.
$Mind->route('tests/post-add', 'app/views/index', 'app/tests/add_post');
$Mind->route('tests/user-add', 'app/views/index', 'app/tests/add_user');
$Mind->route('tests/general-add', 'app/views/index', 'app/tests/add_general');
$Mind->route('tests/category-add', 'app/views/index', 'app/tests/add_category');

// Data collection routes.
$Mind->route('tests/posts', 'app/tests/data_posts');
$Mind->route('tests/general', 'app/tests/data_general');
$Mind->route('tests/users', 'app/tests/data_users');

// Api routes.
$Mind->route('api/posts:start@end', 'app/api/posts');
$Mind->route('api/general', 'app/api/general');
$Mind->route('api/user:id', 'app/api/user', 'app/samantha/get_data');
