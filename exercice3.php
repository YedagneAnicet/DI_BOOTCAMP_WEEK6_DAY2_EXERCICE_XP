<?php
$marks = 10;

if ($marks>=60)
{
	$grade = "First Division";
}
else if($marks>=45)
{
	$grade = "Second Division";
}
else if($marks>=33)
{
	$grade = "Third Division";
}
else
{
	$grade = "Fail";
}
echo "Student marks : $marks <br>";
echo "Student grade: $grade";
?>