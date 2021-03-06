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
</head>
<body>

<?php include "../nav_main.php";?>

<h2>1. Create Object from JSON String</h2>

<p id="demo1"></p>

<script>
var txt = '{"name":"John", "age":30, "city":"New York"}'
var obj1 = JSON.parse(txt);
document.getElementById("demo1").innerHTML = obj1.name + ", " + obj1.age;
</script>





<h2>2.(From the Server) Use the XMLHttpRequest to get the content of a file.</h2>
<p>The content is written in JSON format, and can easily be converted into a JavaScript object.</p>

<p id="demo2"></p>

<script>

var xmlhttp2 = new XMLHttpRequest();
xmlhttp2.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
    var inHTML = myObj.name + ", " + myObj.age;
    var inHTML2 ="</br>";
    for (i = 0; i < 3; i++) {
 		inHTML2 = inHTML2 + myObj.pets[i].name + "(" +  myObj.pets[i].animal + ")</br>";
    }    
    document.getElementById("demo2").innerHTML = inHTML + inHTML2;
  }
};
xmlhttp2.open("GET", "json_demo.txt", true);
xmlhttp2.send();

</script>
<p>Take a look at <a href="json_demo.txt" target="_blank">json_demo.txt</a></p>





<h2>3.(From the Server) Content as Array.</h2>
<p>Content written as an JSON array will be converted into a JavaScript array.</p>

<p id="demo3"></p>

<script>
var xmlhttp3 = new XMLHttpRequest();
xmlhttp3.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myArr3 = JSON.parse(this.responseText);
    var inHTML3 = "";
    for (i = 0; i < 4; i++) {
 		inHTML3 = inHTML3 + myArr3[i];
        if (i < 3) {
            inHTML3 = inHTML3 + ", ";
        }
    } 
    document.getElementById("demo3").innerHTML = inHTML3;  
  }
};
//xmlhttp3.open("GET", "json_demo2.txt", true);
xmlhttp3.open("GET", "http://startcoding.epizy.com/JS_TEST/json_demo2.txt", true);

xmlhttp3.send();
//"json_demo_array.txt"??? ???????????? ????????????, ??????????????? ?????? ??????????
</script>

<p>Take a look at <a href="json_demo2.txt" target="_blank">json_demo_array.txt</a></p>





<h2>4. Convert a string into a function.</h2>

<p id="demo4"></p>

<script>
var text = '{"name":"John", "age":"function() {return 30;}", "city":"New York"}';
var obj = JSON.parse(text);

//console.log(obj.age);                       //function() {return 30;} <= ????????? ?????????
//console.log("(" + obj.age + ")");           //(function() {return 30;}) <= ????????? ????????? '(', ')'??? ??????
//console.log(eval("(" + obj.age + ")"));     //?? () {return 30;} <= ???????????? ????????? ?????? ??????
//eval() : ???????????? ??????(?????????)??? ???????????? ?????? ??????

obj.age = eval("(" + obj.age + ")");            //eval()??? ????????? ????????? ?????? ????????? obj.age??? ??????
document.getElementById("demo4").innerHTML = obj.name + ", " + obj.age(); 
</script>




<h2>5.(From the Server) </h2>
<p>The content is written in JSON format, and can easily be converted into a JavaScript object.</p>

<p id="demo5"></p>

<script>

var xmlhttp5 = new XMLHttpRequest();
xmlhttp5.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj5 = JSON.parse(this.responseText);
    var inHTML5 = myObj5.data.id + ", " + myObj5.data.year + ", " + myObj5.support.text;
    document.getElementById("demo5").innerHTML = inHTML5;
  }
};
xmlhttp5.open("GET", "https://reqres.in/api/products/3", true);
xmlhttp5.send();

</script>
<p>Take a look at <a href="https://reqres.in/api/products/3" target="_blank">https://reqres.in/api/products/3</a></p>


</body>
</html>
