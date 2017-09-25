<?php
/**
Problem Source: https://www.hackerrank.com/challenges/grading/problem
HackerLand University has the following grading policy:

Every student receives a  in the inclusive range from 0 to 100.
Any grade less than 40 is a failing grade.
Sam is a professor at the university and likes to round each student's  according to these rules:

If the difference between the grade and the next multiple of 5 is less than 3, round grade up to the next multiple of 5.
If the value of grade is less than 38, no rounding occurs as the result will still be a failing grade.
For example, grade = 38 will be rounded to 85 but grade will not be rounded because the rounding would result in a number that is less than 40.

Given the initial value of grade for each of Sam's n students, write code to automate the rounding process. For each grade, round it according to the rules above and print the result on a new line.
*/

$handle = fopen ("php://stdin", "r");
function solve($grades){
	foreach ($grades as &$grade) {
		if ($grade >= 38) {
			$rounded = ceiling($grade);
			$grade = ($rounded - $grade < 3) ? $rounded : $grade;
		}
	}
	return $grades;
}

function ceiling($number, $significance = 5)
{
	return ( is_numeric($number) && is_numeric($significance) ) ? (ceil($number/$significance)*$significance) : false;
}

fscanf($handle, "%d",$n);
$grades = array();
for($grades_i = 0; $grades_i < $n; $grades_i++){
   fscanf($handle,"%d",$grades[]);
}
$result = solve($grades);
echo implode("\n", $result)."\n";
?>