<?php

function get_data($table, $needle, $column = null)
{
    global $Mind;
    $data = array();

    if (!$Mind->is_column($table, $column)) {
        $column = $Mind->increments($table);
    }

    $schema = array(
        'search' => array(
            'equal' => array($column => $needle),
        ),
    );

    $data = $Mind->get($table, $schema);

    if (count($data) > 1) {
        return $data;
    }

    return $data[0];
}
