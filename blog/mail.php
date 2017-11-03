<?php
$to = "glen.obgxc.zyxware@gmail.com, harikrishna.pbgxc.zyxware@gmail.com, sudheesh.qbgxc.zyxware@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>Shabana</td>
<td></td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <shabana.nbgxc.zyxware@gmail.com>' . "\r\n";
$headers .= 'Cc: 	jeslin.mbgxc.zyxware@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>