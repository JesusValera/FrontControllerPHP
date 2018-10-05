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
	
	$result = mysqli_query($conn, 'SELECT id, title FROM post');

	$posts = [];

	while ($row = mysqli_fetch_assoc($result))
	{
		$posts[] = $row;
	}
	
	close_database($conn);
	
	return $posts;
}

