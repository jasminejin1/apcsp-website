<!DOCTYPE html>
<html>
<head>
<title>Answers</title>
</head>
<body>
<h1>Review</h1>
<?php
$arg1 = $arg2 = $result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $arg1 = 10;
       $arg2 = test_input($tes);
       $result = system( "/website/FinalProject/answer.c " . $arg1 . " " . $arg2); 
?>
<?php
$totalcorrect = 0;
$answer1 = $_POST['answer1'];
echo 'Question 1: What is 8x5?<br/>';
if (empty($answer1)){
	echo 'You said: No answer<br/>';
}else{
	echo 'You said: '.$answer1.'<br/>'
	if ;
}
echo 'Correct answer: 40<br/>';
?>
<br/>
<?php
$answer2 = $_POST['answer2'];
echo 'Question 2: What is the positive square root of 16?<br/>';
if (empty($answer2)){
        echo 'You said: No answer<br/>';
}else{
        echo 'You said: '.$answer2.'<br/>';
}
echo 'Correct answer: 4<br/>';
?>
<br/>
<?php
$answer3 = $_POST['answer3'];
echo 'Question 3: What is 2 to the power of 8?<br/>';
if (empty($answer3)){
        echo 'You said: No answer<br/>';
}else{
        echo 'You said: '.$answer3.'<br/>';
}
echo 'Correct answer: 256<br/>';
?>
<br/>
<?php
$answer4 = $_POST['answer4'];
echo 'Question 4: What is sin(pi/2)?<br/>';
if (empty($answer4)){
        echo 'You said: No answer<br/>';
}else{
        echo 'You said: '.$answer4.'<br/>';
}
echo 'Correct answer: 1<br/>';
?>
<br/>
<?php
$answer5 = $_POST['answer5'];
echo 'Question 5: 2+x=7. What does x equal?<br/>';
if (empty($answer5)){
        echo 'You said: No answer<br/>';
}else{
        echo 'You said: '.$answer5.'<br/>';
}
echo 'Correct answer: 5<br/>';
?>
<br/>
<?php
$answer6 = $_POST['answer6'];
echo 'Question 6: What is the area of a triangle with a base of 2 and a height of 4?<br/>';
if (empty($answer6)){
        echo 'You said: No answer<br/>';
}else{
        echo 'You said: '.$answer6.'<br/>';
}
echo 'Correct answer: 4<br/>';
?>
<br/>
<?php
$answer7 = $_POST['answer7'];
echo 'Question 7: What is 208+378?<br/>';
if (empty($answer7)){
        echo 'You said: No answer<br/>';
}else{
        echo 'You said: '.$answer7.'<br/>';
}
echo 'Correct answer: 586<br/>';
?>
<br/>
<?php
$answer8 = $_POST['answer8'];
echo 'Question 8: 2x=8. What does x equal?<br/>';
if (empty($answer8)){
        echo 'You said: No answer<br/>';
}else{
        echo 'You said: '.$answer8.'<br/>';
}
echo 'Correct answer: 2<br/>';
?>
<br/>
<?php
$answer9 = $_POST['answer9'];
echo 'Question 9: What is the length of the hypotenuse of a triangle when the other two sides are 3 and 4?<br/>';
if (empty($answer9)){
        echo 'You said: No answer<br/>';
}else{
        echo 'You said: '.$answer9.'<br/>';
}
echo 'Correct answer: 5<br/>';
?>
<br/>
<?php
$answer10 = $_POST['answer10'];
echo 'Question 10: What is the average of the numbers in this sequence: {4, 8, 4, 11, 7}?<br/>';
if (empty($answer10)){
        echo 'You said: No answer<br/>';
}else{
        echo 'You said: '.$answer10.'<br/>';
}
echo 'Correct answer: 7<br/>';
?>
<br/>
</body>
</html>
