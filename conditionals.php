<?php
// 1. if statement
// Executes code only if the condition is true
$grade = 85;

if ($grade >= 75) {
    echo "You passed the subject!";
}


// 2. if...else statement
// Executes one code if true, another code if false
$age = 16;

if ($age >= 18) {
    echo "You are allowed to vote.";
} else {
    echo "You are not yet allowed to vote.";
}


// 3. if...elseif...else statement
// Executes different codes depending on multiple conditions
$score = 90;

if ($score >= 90) {
    echo "Grade: A";
} elseif ($score >= 80) {
    echo "Grade: B";
} elseif ($score >= 70) {
    echo "Grade: C";
} else {
    echo "Grade: F";
}


// 4. switch statement
// Selects one block of code among many based on a value
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Today is the start of the school week.";
        break;
    case "Friday":
        echo "Today is the last school day of the week.";
        break;
    case "Saturday":
    case "Sunday":
        echo "It's the weekend!";
        break;
    default:
        echo "It's just a regular school day.";
        break;
}
?>
