<?php
$URL = "http://startcoding.epizy.com/"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FORM</title>
    <meta name="description" content="Start Coding">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="../../common/css/common.css">
</head>
<body>

<?php include "../../nav_main.php";?>

<form action="form_chk_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<form action="form_chk_post.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>


</body>
</html>