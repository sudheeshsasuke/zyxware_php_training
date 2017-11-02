<?php ob_start() ?>
<div class="blog-post">
  <h2 class="blog-post-title"><!-- TODO: title --><?php print $post['title'];?></h2>
  <p class="blog-post-meta"><!-- TODO: date and author -->
    <?php print date('M D Y',$post['date']);?> by <?php print $post['author'];?>
  </p>
  <!-- TODO: blog body -->
  <?php print $post['body'];?>
</div><!-- /.blog-post -->
<?php $content = ob_get_clean() ?>

<?php include 'templates/layout.tpl.php' ?>
