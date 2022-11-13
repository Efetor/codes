<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Efe Köktürk">
	<style type="text/css">
		.avg1{
			font-family: "Arial";
			font-size: 48px;
			color: limegreen;
			text-align: center;
			font-weight: bold;
		}
		.avg2{
			font-family: "Arial";
			font-size: 48px;
			color: darkred;
			text-align: center;
			font-weight: bold;
		}
		#inc{
			border: 1px solid;
			background-color: lightgoldenrodyellow;
			padding: 20px;
		}
		html{
			background-color: lightgray;
		}
		#padding{

		}


	</style>
	<title>Did i pass the exam? (basic version)</title>
</head>
<body>


<?php
function   calculate($visagrade1=0,$visagrade2=0,$fgrade=0){
	$lastGrade=0;
	$vgradeaverage=((($visagrade1+$visagrade2)/2)*40)/100;
	$finalgrade=($fgrade*60)/100;
	$lastGrade=$vgradeaverage+$finalgrade;
	return $lastGrade;
}

$func = 'calculate';

calculate(50,50,50);
$func(0,0,0);

#Grades here!
#$gr1 for first and $gr2 for second exam.
#$fn for final exam.

$gr1=1000;
$gr2=1000;
$fn=1000;
?>
<div id="padding"></div>
<div id="inc">
<?php

if ($func($gr1,$gr2,$fn)>50) : ?>
	<p class="avg1">Passed!</p>
<?php elseif ($func($gr1,$gr2,$fn)<50) :?>
	<p class="avg2">Failed...</p>
<?php endif; ?>

</div>
</body>
</html>
