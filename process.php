<?php
$correctAnswers = [
    'q1' => '2',
    'q2' => '2',
    'q3' => '3'
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
        <p>Your score: <?= $score ?>/3</p>
        <a href="index.html">Take the test again</a>
    </div>
</body>
</html>
