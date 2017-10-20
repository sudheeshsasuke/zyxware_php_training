<!DOCTYPE html>
<html>
    <head>
        <title><?= $post['title'];?></title>
        <link rel="stylesheet" href="http://blog/stage1/style.css"/>
    </head>
    <body>
        <div id="display">
            <h1><!-- TODO: print title -->
                <?php print $post['title']; ?>
            </h1>
            <div id="date"><!-- TODO: print date and author. eg: Jan 1 2014 by Webmaster-->
                <p>
                    <?php print date('M D Y',$post['date']);?> by <?php print $post['author']?>
                </p>
            </div>
            <div><!-- TODO: print body-->
                <p><?php print $post['body'];?></p>
            </div>
        </div> 
    </body>
</html>
