<?php
echo "<p align='center'> <font color=blue  size='6pt'>Marco Angelo C. Simbulan</font> </p>";
echo "<p align='center'> <font color=blue  size='6pt'>SIMPLE GRADING SYSTEM;</font> </p>";
$marks = 2312;

if ($marks>=98&&$marks<=100)
{
	$grade = "1.00 Excellent!";
}
else if($marks>=95&&$marks<=97)
{
	$grade = "1.25 Superior!";
}
else if($marks>=92&&$marks<=94)
{
	$grade = "1.50 Very Good!";
}
else if($marks>=89&&$marks<=91)
{
	$grade = "1.75 Good!";
}
else if($marks>=83&&$marks<=88)
{
	$grade = "2.00 Very Satisfactory!";
}
else if($marks>=83&&$marks<=80)
{
	$grade = "Satisfactory!";
}
else if($marks>=80&&$marks<=82)
{
	$grade = "2.50 Average!";
}
else if($marks>=77&&$marks<=79)
{
	$grade = "2.75 Fair!";
}
else if($marks>=75&&$marks<=76)
{
	$grade = "3.00 Passed!";
}
else if($marks<75)
{
	$grade = "Failed!";
}
else if  ($marks>100)
{
	$grade = "Wrong Input!";
}
echo "Course Grade:$marks- $grade";
?>