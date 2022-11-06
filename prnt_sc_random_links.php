<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        #main {
            background-color: lightgoldenrodyellow;
            padding: 100px;
            border: 1px black solid;
            text-align: center;
            font-size: 30px;
            font-family: "Arial";
            font-weight: bold;   
        }
        .bottomtext {
            font-family: "Arial";
            font-size: 12px;
            text-decoration: underline;
            text-align: center;

        }
        html {
            background-color: #CFDBDB;
        }



    </style>
</head>
<body>
    <?php
$letters=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
shuffle($letters);
?>
<?php
$numbers=["1","2","3","4","5","6","7","8","9","0"];
shuffle($numbers);
?>
<?php
$page = $_SERVER['PHP_SELF'];
?>
<div id=main>
<a href="https://prnt.sc/<?php echo $letters[rand(0,22)].$letters[rand(0,22)].$numbers[rand(0,8)].$numbers[rand(0,8)].$numbers[rand(0,8)].$numbers[rand(0,8)] ?> " target=_blank style="text-decoration: none;">Click for random prnt.sc screenshot!</a>
</div>
<p class=bottomtext> Don't forget to refresh the page for new link/screenshot. </p>


</body>
</html>
