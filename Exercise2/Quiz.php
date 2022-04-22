<?php 
$pool = $_POST["pool"];
$country = $_POST["country"];
$octi = $_POST["octi"];
$coffee = $_POST["coffee"];
$vocal = $_POST["vocal"];
$score = 0;


echo "Question 1: How long is an Olympic swimming pool (in meters)? <br>";
echo "  You answered: " . $pool . "<br>";
echo "  Correct answer: 50 <br>"; 
echo "<br>";

if($pool == "50"){
    $score++;
}

echo "Question 2: What is the smallest country in the world? <br>";
echo "  You answered: " . $country . "<br>";
echo "  Correct answer: Vatican City <br>"; 
echo "<br>";

if($country == "Vatican City"){
    $score++;
}

echo "Question 3: How many hearts does an octopus have? <br>";
echo "  You answered: " . $octi . "<br>";
echo "  Correct answer: 3 <br>"; 
echo "<br>";

if($octi == "3"){
    $score++;
}

echo "Question 4: Which country produces the most coffee in the world? <br>";
echo "  You answered: " . $coffee . "<br>";
echo "  Correct answer: Brazil <br>"; 
echo "<br>";

if($coffee == "Brazil"){
    $score++;
}

echo "Question 5: Which mammal does not have vocal cords? <br>";
echo "  You answered: " . $vocal . "<br>";
echo "  Correct answer: Giraffe <br>"; 
echo "<br>";

if($vocal == "Giraffe"){
    $score++;
}

$percent = $score * 20;

echo "You answered " . $score . " out of 5 questions correctly <br>";
echo "You earned a " . $percent . "% <br>";

?>