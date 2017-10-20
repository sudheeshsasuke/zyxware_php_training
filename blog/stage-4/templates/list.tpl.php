<?php ob_start() ?>
    <h2>List of Posts</h2>
    <!--TODO: loop through posts array and list the blog titles as an
    unordered list with link to the corresponding blog post.
    Eg. /boot-camp/show.php?id=123 -->
    <?php foreach($posts as $post):?>
    <ul>
        <li>
            <a href="show.php?id=<?= $post['id']?>"><?= $post['title']?></a>
        </li>
    </ul>
<?php endforeach;?>
<?php $content = ob_get_clean() ?>

<?php include 'templates/layout.tpl.php' ?>
