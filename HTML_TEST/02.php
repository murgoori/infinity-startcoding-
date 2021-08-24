<?php
$URL = "http://startcoding.epizy.com/"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>02 TEST</title>
    <meta name="description" content="Start Coding">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="../common/css/common.css">
    <style>
        h1 {
            color: maroon;
            margin-left: 40px;
        }
        table.type07 {
            border-collapse: collapse;
            text-align: left;
            line-height: 1.5;
            border: 1px solid #ccc;
            margin: 20px 10px;
        }
        table.type07 thead {
            border-right: 1px solid #ccc;
            border-left: 1px solid #ccc;
            background: #e7708d;
        }
        table.type07 thead th {
            padding: 10px;
            font-weight: bold;
            vertical-align: top;
            color: #fff;
        }
        table.type07 tbody th {
            width: 150px;
            padding: 10px;
            font-weight: bol1d;
            vertical-align: top;
            border-bottom: 1px solid #ccc;
            background: #fcf1f4;
        }
        table.type07 td {
            width: 350px;
            padding: 10px;
            vertical-align: top;
            border-bottom: 1px solid #ccc;
        }
    </style>    
</head>
<body>
</head>
<body>
<?php include "../nav_main.php";?>
<h1>This is a heading</h1>
<p>This is a paragraph.</p>

<table class="type07">
    <thead>
        <tr>
        <th scope="cols">타이틀</th>
        <th scope="cols">내용</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">항목명</th>
            <td>내용이 들어갑니다.</td>
        </tr>
        <tr>
            <th scope="row">항목명</th>
            <td>내용이 들어갑니다.</td>
        </tr>
        <tr>
            <th scope="row">항목명</th>
            <td>내용이 들어갑니다.</td>
        </tr>
    </tbody>
</table>
</body>
</html>