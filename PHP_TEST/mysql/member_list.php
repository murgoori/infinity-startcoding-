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
    <link rel="stylesheet" href="../../common/css/common.css">
</head>
<body>

<?php include "../../nav_main.php";?>

<?php
include 'db_conn.php';

/* If we have to retrieve large amount of data we use MYSQLI_USE_RESULT */
if ($result = mysqli_query($conn, "SELECT * FROM sc_member", MYSQLI_USE_RESULT)) {

    /* Note, that we can't execute any functions which interact with the
       server until result set was closed. All calls will return an
       'out of sync' error */
    if (!mysqli_query($conn, "SET @a:='this will not work'")) {
        printf("Error: %s\n", mysqli_error($conn));
    }
    mysqli_free_result($result);
    $row = mysqli_fetch_array($result);
}

mysqli_close($conn);
?>
</body>
</html>