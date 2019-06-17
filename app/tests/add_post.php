<?php

$scheme = array(
    array(
        'title'=>'Introducing Pure',
        'content'=>'Yesterday at CSSConf, we launched Pure – a new CSS library. Phew! Here are the slides from the presentation. Although it looks pretty minimalist, we’ve been working on Pure for several months. After many iterations, we have released Pure as a set of small, responsive, CSS modules that you can use in every web project.',
        'tags'=>'',
        'category'=>json_encode(array('2', '3')),
        'pinstatus'=>true,
        'created_at'=>$this->timestamp,
        'author'=>'1'
    ),
    array(
        'title'=>'Everything You Need to Know About Grunt',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
        'tags'=>'',
        'category'=>json_encode(array('4')),
        'pinstatus'=>false,
        'created_at'=>$this->timestamp,
        'author'=>'2'
    ),
    array(
        'title'=>'Photos from CSSConf and JSConf',
        'content'=>'',
        'tags'=>'',
        'category'=>json_encode(array('1')),
        'pinstatus'=>false,
        'pimages'=>json_encode(
            array(
                array(
                    'href'=>'http://www.flickr.com/photos/uberlife/8915936174/',
                    'alt'=>'Photo of someone working poolside at a resort',
                    'src'=>'http://farm8.staticflickr.com/7448/8915936174_8d54ec76c6.jpg',
                    'h3'=>'CSSConf Photos'
                ),
                array(
                    'href'=>'http://www.flickr.com/photos/uberlife/8907351301/',
                    'alt'=>'Photo of the sunset on the beach',
                    'src'=>'http://farm8.staticflickr.com/7382/8907351301_bd7460cffb.jpg',
                    'h3'=>'JSConf Photos'
                )
            )
        ),
        'created_at'=>$this->timestamp,
        'author'=>'3'
    ),
    array(
        'title'=>'YUI 3.10.2 Released',
        'content'=>'We are happy to announce the release of YUI 3.10.2! You can find it now on the Yahoo! CDN, download it directly, or pull it in via npm. We’ve also updated the YUI Library website with the latest documentation.',
        'tags'=>'',
        'category'=>json_encode(array('5')),
        'pinstatus'=>false,
        'created_at'=>$this->timestamp,
        'author'=>'4'
    )
);

$this->insert('posts', $scheme);

?>