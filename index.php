<?php
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Pragma: no-cache");
// include 'includes/constantsx.php';
require_once 'includes/constants.php';
require_once 'includes/form.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Popular Babynames</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <style>
        img {
            height: 350px;
            float: right;
            border-radius: 10px;
            box-shadow: 2px 2px 2px rgba(0,0,0,.5);
            margin-right: 60px;
        }
        input[type=submit] {
            background-color: #FDF0F2;
            border: 1px solid #F6B6BD;
            color: #000000;
            padding: 15px 32px;
            border-radius: 10px;
            box-shadow: 2px 2px 2px rgba(0,0,0,.5);
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px 10px 60px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #F6B6BD;
            border: 1px solid #F6B6BD;
            color: #ffffff;
            box-shadow: 0px 0px 0px;
        }
  </style>
</head>
<body>
<img src="images/adele-morris-unsplash.jpg" alt="New born baby Photos by Adele Morris Photography ">
<h1>Popular Baby Names</h1>
<p>Data is from the <a href="https://www.ssa.gov/oact/babynames/limits.html" target="_blank">United States Social Security</a> department.</p>
<p>The data is restricted to a minimum of 5 occurrences to protect personal privacy. The data is from 1880 to 2020.</p>
<?php output_form("GET", TARGET_PAGE); ?>
<address>
<p>@ <?php echo date('Y'); ?> Illya King. All Rights Reserved.</p>
</address>
</body>
</html>
