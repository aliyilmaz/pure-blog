<?php

require_once('Mind.php');
use Mind\Mind;
$Mind = new Mind();

// Static page routes.
$Mind->route('/', 'app/views/index');
$Mind->route('admin', 'app/views/admin');

// Table creation routes.
$Mind->route('install/users', 'app/views/index', 'app/tables/users');
$Mind->route('install/posts', 'app/views/index', 'app/tables/posts');
$Mind->route('install/general', 'app/views/index', 'app/tables/general');

// Demo creation routes.
$Mind->route('tests/post-add', 'app/views/index', 'app/tests/add_post');
$Mind->route('tests/user-add', 'app/views/index', 'app/tests/add_user');
$Mind->route('tests/general-add', 'app/views/index', 'app/tests/add_general');

// Data collection routes.
$Mind->route('tests/posts', 'app/tests/data_posts');
$Mind->route('tests/general', 'app/tests/data_general');