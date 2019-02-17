<?php

$scheme = array(
    array(
        'title'=>'Introducing Pure',
        'content'=>'Yesterday at CSSConf, we launched Pure – a new CSS library. Phew! Here are the slides from the presentation. Although it looks pretty minimalist, we’ve been working on Pure for several months. After many iterations, we have released Pure as a set of small, responsive, CSS modules that you can use in every web project.',
        'tags'=>json_encode(array('CSS', 'Pure')),
        'pinstatus'=>true,
        'created_at'=>date('d-m-Y H:i:s'),
        'author'=>'1'
    ),
    array(
        'title'=>'Everything You Need to Know About Grunt',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
        'tags'=>json_encode(array('JavaScript')),
        'pinstatus'=>false,
        'created_at'=>date('d-m-Y H:i:s'),
        'author'=>'2'
    ),
    array(
        'title'=>'Photos from CSSConf and JSConf',
        'content'=>'',
        'tags'=>json_encode(array('Uncategorized')),
        'pinstatus'=>false,
        'created_at'=>date('d-m-Y H:i:s'),
        'author'=>'3'
    ),
    array(
        'title'=>'YUI 3.10.2 Released',
        'content'=>'We are happy to announce the release of YUI 3.10.2! You can find it now on the Yahoo! CDN, download it directly, or pull it in via npm. We’ve also updated the YUI Library website with the latest documentation.',
        'tags'=>json_encode(array('YUI')),
        'pinstatus'=>false,
        'created_at'=>date('d-m-Y H:i:s'),
        'author'=>'4'
    )
);

$this->insert('posts', $scheme);

?>