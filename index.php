<?php
// index.php

$conn = mysqli_connect('localhost', 'root', 'toor', 'front_controller');

$result = mysqli_query($conn, 'SELECT id, title FROM post');

$posts = [];

while ($row = mysqli_fetch_assoc($result))
{
	$posts[] = $row;
}

mysqli_close($conn);

require 'templates/list.php';
