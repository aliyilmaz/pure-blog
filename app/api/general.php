<?php

$scheme = array(
    'format' => 'json',
);

// General settings read.
$general = $this->getData('general', $scheme);

echo $general;
