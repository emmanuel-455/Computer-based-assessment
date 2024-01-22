<?php
$correctAnswers = [
    'q1' => '2',
    'q2' => '3',
    'q3' => '1',
    'q4' => '1',
    'q5' => '3'
    'q6' => '9'

];

$score = 0;

foreach ($correctAnswers as $question => $correct) {
    if (isset($_POST[$question]) && $_POST[$question] === $correct) {
        $score++;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Test Results</h1>
        <p>Your score: <?= $score ?>/5</p>
        <a href="index.html">Take the test again</a>
    </div>
</body>
</html>
