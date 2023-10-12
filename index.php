<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer-Based Test</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Computer-Based Test</h1>
        <form action="process.php" method="post">
            <ol>
                <li>
                    <p>What is 2 + 2?</p>
                    <input type="radio" name="q1" value="1"> 3
                    <input type="radio" name="q1" value="2"> 4
                    <input type="radio" name="q1" value="3"> 5
                </li>
                <li>
                    <p>Which planet is known as the Red Planet?</p>
                    <input type="radio" name="q2" value="1"> Earth
                    <input type="radio" name="q2" value="2"> Mars
                    <input type="radio" name="q2" value="3"> Venus
                </li>
                <li>
                    <p>What is the capital of France?</p>
                    <input type="radio" name="q3" value="1"> London
                    <input type="radio" name="q3" value="2"> Berlin
                    <input type="radio" name="q3" value="3"> Paris
                </li>
            </ol>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
