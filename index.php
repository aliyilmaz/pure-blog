<?php

require_once('Mind.php');
use Mind\Mind;
$Mind = new Mind();

$Mind->route('/', 'app/views/index');
