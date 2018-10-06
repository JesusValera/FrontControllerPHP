<!-- templates/show.php -->

<?php $title = $post['title'] ?>

<h1><?php echo $post['title'] ?></h1>

<div class="date"><?php echo $post['date'] ?></div>
<div class="body">
    <?php echo $post['body'] ?>
</div>
<?php $content = ob_get_clean() ?>

<?php include 'base.php' ?>
