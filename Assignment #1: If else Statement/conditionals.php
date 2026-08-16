<?php
// 1. if statement
$grade = 85;

if ($grade >= 75) {
    echo "You passed the subject!";
}

// 2. if...else statement
$age = 16;

if ($age >= 18) {
    echo "You are allowed to vote.";
} else {
    echo "You are not yet allowed to vote.";
}

// 3. if...elseif...else statement
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
