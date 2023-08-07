<?php
require_once 'pdo.php';
function size_insert($size)
{
    $sql = "INSERT INTO sizes(size) VALUES(?)";
    pdo_execute($sql, $size);
}

function size_delete($size_id)
{
    $sql = "DELETE FROM sizes WHERE size_id=?";
    if (is_array($size_id)) {
        foreach ($size_id as $size_id) {
            pdo_execute($sql, $size_id);
        }
    } else {
        pdo_execute($sql, $size_id);
    }
}

function size_select_all($size = 'DESC')
{
    $sql = "SELECT * FROM sizes ORDER BY size_id $size";
    return pdo_query($sql);
}
function size_select_by_id($size)
{
    $sql = "SELECT * FROM sizes WHERE size_id=?";
    return pdo_query_one($sql, $size);
}
function size_update($size_id, $size)
{
    $sql = "UPDATE sizes SET size=? WHERE size_id=?";
    pdo_execute($sql, $size, $size_id);
}
function size_exist_size_add($size)
{
    $sql = "SELECT count(*) FROM sizes WHERE size=?";
    return pdo_query_value($sql, $size) > 0;
}
function size_exist_size_update($size_id, $size)
{
    $sql = "SELECT count(*) FROM sizes WHERE  size_id!=? and size=?";
    return pdo_query_value($sql, $size_id, $size) > 0;
}