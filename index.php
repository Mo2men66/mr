<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duolingo exercise</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script defer src="exercises.js"></script>
    <script defer src="script.js"></script>
</head>

<body>
    <div class="wrapper">
        <h1>Write this in Spanish</h1>
        <div class="top__container">
            <div class="image_text__container">
                <img src="images/imagespic-2.jpg" alt="duo">
                <p id="original__text"></p>
            </div>
            <div id="destination__container">
            </div>
        </div>
        <div id="origin__container">
        </div>
    </div>
    <footer>
        <div><form action="skip.php" method="POST"><input type="submit" name="skip_btn" value="SKIP" class="skip_button"></form></div>
        <div><form action="check.php" method="POST"><input type="submit" name="check_btn" value="CHECK" class="check_button"></form>></div>
    </footer>
</body>

</html>