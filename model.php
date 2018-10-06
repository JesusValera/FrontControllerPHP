<?php
// model.php

function open_database()
{
    return mysqli_connect('localhost', 'root', 'toor', 'front_controller');
}

function close_database($conn)
{
    mysqli_close($conn);
}

function get_all_posts()
{
    $conn = open_database();

    $query = 'SELECT id, title FROM post';
    $result = mysqli_query($conn, $query);

    $posts = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $posts[] = $row;
    }

    close_database($conn);

    return $posts;
}

function get_post_by_id($id)
{
    $conn = open_database();

    $id = $conn->real_escape_string($id);
    $query = 'SELECT date, title, body FROM post WHERE id = ' . $id;
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    close_database($conn);

    return $row;
}
