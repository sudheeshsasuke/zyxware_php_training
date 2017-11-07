<?php
  if(!empty($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $flag = 1;
  }
  else {
    $flag = 0;
    $username = "";
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Developer Camp at GEC Wayanad</title>

    <!-- Bootstrap core CSS -->
    <link href="/stage-5/templates/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/stage-5/templates/css/blog.css" rel="stylesheet">
    <link href="/stage-5/templates/css/style.css" rel="stylesheet">

    <!-- Javascipt files-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
 
      $(function() {
          $("#loader").hide();
          $('#commentform').submit(function() {
            var postid = $("#postid").val();
            $("#loader").show();
              $.ajax({
                  type: 'POST',
                  url: 'http://blog/stage-5/index.php/comment_action',
                  data: { comment_text: $("#commentid").val(),
                          post_id: $("#postid").val()
                        },
                  success: function(result) {
                    $("#commentid").val(" ");
                    $("#loader").hide();
                    show(postid);
                  }
              });
              return false;
          }); 
      });

      function show(postid) {
        var link =  'http://blog/stage-5/index.php/show?id=' + postid;
        $.ajax({
                  url: link,
                  success: function(result) {
                    //alert(result);
                    $('body').html(result);
                  }
              });
      }
    </script>

    <script type="text/javascript" src="/stage-5/templates/js/script.js"></script>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="/stage-5">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a>
          

          <a class="blog-nav-item moveright" href="/stage-5/index.php/#"> <?php echo htmlentities($username);?></a>
          <?php if($flag):?>
            <a class="blog-nav-item moveright" href="/stage-5/index.php/Login"> 
              <img src="http://blog/stage-5/<?=$_SESSION['taget_image_path'];?>" alt="profile" width="30" />
            </a>
              <a class="blog-nav-item moveright" href="/stage-5/index.php/logout"> Logout</a>
          <?php else:?>
            <a class="blog-nav-item moveright" href="/stage-5/index.php/Login">Login</a>
            <a class="blog-nav-item moveright" href="/stage-5/index.php/register"> Register</a>
          <?php endif;?>
        
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
          <?php echo $content; ?>
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
