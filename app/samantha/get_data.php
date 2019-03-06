<?php

function get_data($table, $map, $column = null)
{
    global $Mind;
    $data = array();

    $schema['search']['equal'] = $map;

    if (!empty($column)) {
        $schema['column'] = $column;
    }

    $data = $Mind->get($table, $schema);

    if (count($data) > 1) {
        return $data;
    }

    return $data[0];
}
