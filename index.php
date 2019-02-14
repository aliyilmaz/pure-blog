<?php

require_once('Mind.php');
use Mind\Mind;
$Mind = new Mind();

$Mind->route('/', 'app/views/index');
$Mind->route('admin', 'app/views/admin');
$Mind->route('install/users', 'app/views/index', 'app/tables/users');
$Mind->route('install/posts', 'app/views/index', 'app/tables/posts');