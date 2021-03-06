<!-- templates/list.php -->

<?php $title = 'List of Posts' ?>

<h1>List of Posts</h1>
<ul>
    <?php foreach ($posts as $post): ?>
        <li>
            <a href="index.php/show?id=<?php echo $post['id'] ?>">
                <?php echo $post['title'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
<?php $content = ob_get_clean() ?>

<?php include 'base.php' ?>
