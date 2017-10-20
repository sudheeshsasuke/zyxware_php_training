<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Developer Camp at GEC Wayanad</title>

    <!-- Bootstrap core CSS -->
    <link href="/stage-3/templates/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/stage-3/templates/css/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="/boot-camp">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a>
        </nav>
      </div>
    </div>

    <div class="container">
    
      <div class="blog-header">
        <h1 class="blog-title">Developer Camp</h1>
        <p class="lead blog-description">The official blog for the developer camp.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
          <!-- TODO: Show the title, date, author and body of the blog post -->
          <div class="blog-post">
            <h2 class="blog-post-title"><!-- TODO: title -->
              <?php print $post['title']; ?>
            </h2>
            <p class="blog-post-meta"><!-- TODO: date and author -->
              <?php print date('M d Y',$post['date']);?> by <?php print $post['author'];?>          
            </p>
            <!-- TODO: blog body -->
            <?php print $post['body']; ?>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module">
            <h4>Zyxware Technologies</h4>
            <ol class="list-unstyled">
              <li><a href="http://www.github.com/zyxware">GitHub</a></li>
              <li><a href="http://www.twitter.com/zyxware">Twitter</a></li>
              <li><a href="www.facebook.com/zyxware">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="blog-footer">
      <p>Developer Camp by <a href="http://www.zyxware.com">Zyxware</a></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </div>
  </body>
</html>
