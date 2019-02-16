<?php

$scheme = array(
    array(
        'username'=>'Tilo Mitra',
        'password'=>md5('123456'),
        'email'=>'tilo.mitra@example.com',
        'avatar'=>'public/img/common/tilo-avatar.png',
        '_token'=>md5(rand(999,9999)),
        'created_at'=>date('d-m-Y H:i:s')
    ),
    array(
        'username'=>'Eric Ferraiuolo',
        'password'=>md5('123456'),
        'email'=>'eric.ferraiuolo@example.com',
        'avatar'=>'public/img/common/ericf-avatar.png',
        '_token'=>md5(rand(999,9999)),
        'created_at'=>date('d-m-Y H:i:s')
    ),
    array(
        'username'=>'Reid Burke',
        'password'=>md5('123456'),
        'email'=>'reid.burke@example.com',
        'avatar'=>'public/img/common/reid-avatar.png',
        '_token'=>md5(rand(999,9999)),
        'created_at'=>date('d-m-Y H:i:s')
    ),
    array(
        'username'=>'Andrew Wooldridge',
        'password'=>md5('123456'),
        'email'=>'andrew.wooldridge@example.com',
        'avatar'=>'public/img/common/andrew-avatar.png',
        '_token'=>md5(rand(999,9999)),
        'created_at'=>date('d-m-Y H:i:s')
    )
);

$this->insert('users', $scheme);

?>