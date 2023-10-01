<h2>1. code to check if the number is even.....</h2>
<?php
$a = 5;
echo "a = ".$a."<br>";
if($a%2==0)
    echo "given number id even</h4>";
else
    echo "given number is odd";
?>



<h2>2. code to add two numbers.....</h2>
<?php
$a = 4;
echo "a = ".$a."<br>";
$b = 7;
echo "b = ".$b."<br>";
$sum = $a + $b;
echo "a + b = ". $sum;
?>



<h2>3. code to subtract two numbers.....</h2>
<?php
$x = 8;
echo "a = ".$x."<br>";
$y = 15;
echo "a = ".$y."<br>";
$subtract = $x - $y;
echo "a - b = ". $subtract;
?>



<h2>4. code to print numbers from 0 to 50.....</h2>
<?php
for ($i = 0; $i <= 50; $i++) {
    echo $i;
    echo '<span style="margin-right: 12px;"></span>';
}
?>



<h2>5. code to check if you are an adult or not....</h2>
<?php
$age = 25;
echo "age = ".$age."<br>";
if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are not an adult.";
}
?>



<h2>6. code to check if given number is greater than zero or less than zero....</h2>
<?php
$a = 3;
echo "a = ".$a."<br>";
if($a > 0){
    echo "the numbe is greates than zero";
}
elseif($a = 0){
    echo "the number is equal to zero";
}
else{
   echo "the number is lesser than zero";
}
?>



<h2>7. code to ptint the grades according to obtained marks....</h2>
<?php
$grade = 75;
echo "grade = ".$grade."<br>";
if ($grade >= 90) {
    echo "A";
} elseif ($grade >= 80) {
    echo "B";
} elseif ($grade >= 70) {
    echo "C";
} else {
    echo "F";
}
?>



<h2>8. code to check if the number is divisable by 3....</h2>
<?php
$number = 9;
echo "number = ".$number."<br>";
if ($number % 3 === 0) {
    echo "$number is divisible by 3.";
} else {
    echo "$number is not divisible by 3.";
}
?>