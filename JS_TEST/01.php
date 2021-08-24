<?php
$URL = "http://startcoding.epizy.com/"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My First Javascript</title>
    <meta name="description" content="Start Coding">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="../common/css/common.css">
</head>
<body>

<?php include "../nav_main.php";?>

<h2>My First JavaScript</h2>

<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p>

</body>
</html> 
