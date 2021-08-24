<?php
$URL = "http://startcoding.epizy.com/"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My First PHP</title>
    <meta name="description" content="Start Coding">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="../common/css/common.css">
</head>
<body>

<?php include "../nav_main.php";?>

<?php
echo "<h3>###### print & echo #######</h3>";
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

echo "<h3>###### variables #######</h3>";
$x1 = 10;       //global scope
$x9 = 100;
$y9 = 200;
function myTest1() {
    $x2 = 20; // local scope
    $GLOBALS['y9'] = $GLOBALS['x9'] + $GLOBALS['y9'];
    echo "<p>Variable x1 outside function is: $x1</p>";
    echo "<p>Variable x2 inside function is: $x2</p>";
} 
myTest1();
  
// using x outside the function will generate an error
echo "<p>Variable x1 outside function is: $x1</p>";
echo "<p>Variable x2 inside function is: $x2</p>";
echo "<p>Variable x2 inside function is: $y9</p>";

echo "<h3>###### Static variables #######</h3>";
//Variables : Static 
myTest2();
myTest2();
myTest2();

function myTest2() {
    static $x = 0;          //static variables
    echo $x;
    $x++;
} 

?>
</body>
</html>
