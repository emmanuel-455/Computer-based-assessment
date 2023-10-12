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
                    <p>What is the capital of Nigeria?</p>
                    <input type="radio" name="q1" value="1"> Lagos
                    <input type="radio" name="q1" value="2"> Abuja
                    <input type="radio" name="q1" value="3"> lagos
                </li>
                <li>
                    <p>What color is the Nigeria flag?</p>
                    <input type="radio" name="q2" value="1"> Red, Blue, Green
                    <input type="radio" name="q2" value="2"> Brown, Black, Orange
                    <input type="radio" name="q2" value="3"> Green, White, Green
                </li>
                <li>
                    <p>Who is the current President of Nigeria?</p>
                    <input type="radio" name="q3" value="1"> Bola Ahmed Tinubu
                    <input type="radio" name="q3" value="2"> Mohammed Buhari
                    <input type="radio" name="q3" value="3"> Goodluck Ebere Jonathan
                </li>
                <li>
                    <p>What is 10 + 10?</p>
                    <input type="radio" name="q4" value="1"> 20
                    <input type="radio" name="q4" value="2"> 30
                    <input type="radio" name="q4" value="3"> 50
                </li>
                <li>
                    <p>When did Nigeria gain their independence?</p>
                    <input type="radio" name="q5" value="1"> 1948
                    <input type="radio" name="q5" value="2"> 2023
                    <input type="radio" name="q5" value="3"> None of the above
                </li>
            </ol>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
