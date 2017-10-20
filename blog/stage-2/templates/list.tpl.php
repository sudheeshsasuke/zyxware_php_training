<!DOCTYPE html>
<html>
    <head>
        <title>List of Posts</title>
        <link rel="stylesheet" href="http://blog/stage1/style.css"/>
    </head>
    <body>
        <div id="display">
            <h1>List of Posts</h1>
            <!-- TODO: loop through posts array and print all titles as link to the
            corresponding posts as unordered list.
            link path eg: /boot-camp/show.php?id=1 -->
            <?php foreach($posts as $post): ?>
            <ul>
                <li>
                    <a href="show.php?id=<?php print $post['id'];?>">
                        <?php print $post['title'];?>
                    </a>
                </li>
            </ul>
        <?php endforeach;?>
</div>
    </body>
</html>
