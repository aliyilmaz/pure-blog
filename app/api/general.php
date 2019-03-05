<?php

$scheme = array(
    'format' => 'json',
);

// General settings read.
$general = $this->get('general', $scheme);

echo $general;
