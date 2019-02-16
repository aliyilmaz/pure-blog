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

// Demo content creation routes.
$Mind->route('tests/post-add', 'app/views/index', 'app/tests/add_post');