<?php
$subjects = array("Math", "Science", "English", "History");
$sum = 0;

foreach ($subjects as $subject) {
    do {
        echo "Enter your score for $subject: ";
        $input = readline();

        // Check if the input is not an integer or is outside the valid range
        if (!is_numeric($input) || strpos($input, '.') !== false || $input < 0 || $input > 100) {
            echo "Invalid input. Please enter a valid integer between 0 and 100.\n";
        }
    } while (!is_numeric($input) || strpos($input, '.') !== false || $input < 0 || $input > 100);

    // Adding all scores then divide on how many element on the array
    $sum += $input;
    $average = $sum / count($subjects);
}
// Calling the Average of the score of the user
echo "Your average is: $average \n";

if ($average >= 90) {
    echo"Excellent! Keep up the good work!";
} elseif ($average >= 80) {
    echo"Good job!";
} elseif ($average >= 70) {
    echo"Fair, but you can do better";
} else {
    echo"Needs improvement!";
} 
?>
 