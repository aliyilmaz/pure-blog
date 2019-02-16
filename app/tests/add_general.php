<?php

$scheme = array(
    'title'=>'A SAMPLE BLOG',
    'description'=>'Creating a blog layout using Pure',
    'buttons'=>json_encode(
        array(
            array('text'=>'PURE', 'href'=>'http://purecss.io/'),
            array('text'=>'YUI LIBRARY', 'href'=>'http://yuilibrary.com/')

        )
    ),
    'fbuttons'=>json_encode(
        array(
            array('text'=>'About', 'href'=>'http://purecss.io/'),
            array('text'=>'Twitter', 'href'=>'http://twitter.com/yuilibrary/'),
            array('text'=>'GitHub', 'href'=>'http://github.com/pure-css/pure/')

        )
    ),
    'updated_at'=>date('d-m-Y H:i:s')
);

$this->update('general', $scheme, 1);

?>