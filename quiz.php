<?php

$q1= $_POST ['question1'];
$q2= $_POST ['question2'];
$q3= $_POST ['question3'];
$q4= $_POST ['question4'];
$q5= $_POST ['question5'];
$counter = 0;

echo '<p>1. What is Joe Murray's middle name?:<br>';

if($q1 == 'Tanner') {
    $counter++;
} 
if($q2 == 'Rocky') {
    $counter++;
} 
if($q3 == 'donnie') {
    $counter++;
} 
if($q4 == 'adam') {
    $counter++;
} 
if($q5 == 'susie') {
    $counter++;
} 

echo 'your answer: ' . $q1;
echo 'the correct answer: Tanner';

echo 'your answer: ' . $q2;
echo 'the correct answer: Rocky';

echo 'your answer: ' . $q3;
echo 'the correct answer: donnie';

echo 'your answer: ' . $q4;
echo 'the correct answer: adam';

echo 'your answer: ' . $q5;
echo 'the correct answer: susie';

echo 'you scored a ' . $counter * 20 . '%';

?>
