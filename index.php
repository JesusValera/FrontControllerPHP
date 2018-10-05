<?php
// index.php

$conn = mysqli_connect('localhost', 'root', 'toor', 'front_controller');

$result = mysqli_query($conn, 'SELECT id, title FROM post');
?>

    <html>
        <head>
        <title>List of Posts</title>
        </head>
        <body>
        <h1>List of Posts</h1>
        <ul>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <li>
                <a href="/show.php?id=<?php echo $row['id'] ?>">
                    <?php echo $row['title'] ?>
                    </a>
            </li>
            <?php endwhile; ?>
        </ul>
        </body>
    </html>

<?php
mysqli_close($conn);
