<?php ob_start() ?>
<div id="display">
<h1>REGISTER</h1>
<form action="http://blog/stage-5/index.php/register_action" method="post" onclick="return Validate()" >
    <br>
    User Name:<br><input type="text" name="name" id="input_name" placeholder="username" ><br><br>
    E-mail:<br><input type="email" name="email" placeholder="email" ><br><br>
    Password:<br><input type="password" name="password" placeholder="password" >
    <br><br>
    <input type="submit" value="send">
</form>
</div><!-- /.blog-post -->
<?php $content = ob_get_clean() ?>

<?php include 'templates/layout.tpl.php' ?>
