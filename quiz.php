<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quiz.css">
  
    <title>Quiz</title>
</head>
<body>
</form>
<div class="quiz-container">
    <h1>Mr. Linguistic</h1>
    <hr>
    <form id="quiz-form" method="POST" action="check.php">
        <div class="d-flex">
            <div class="question">
                <p>How can you write "I eat an apple" in Spanish?</p>
                <div class="answers">
                    <label>
                        <input type="radio" name="answer" value="Como yo una manzana">
                        Como yo una manzana
                    </label>
                    <label>
                        <input type="radio" name="answer" value="Yo como una manzana">
                        Yo como una manzana
                    </label>
                    <label>
                        <input type="radio" name="answer" value="Manzana como una yo">
                        Manzana como una yo
                    </label>
                    <label>
                        <input type="radio" name="answer" value="Una yo como manzana">
                        Una yo como manzana
                    </label>
                </div>
            </div>
        </div>
        <input type="submit"class="submit-btn" value="check" name="check_btn">
    </form>
    <form action="">
    <button class="submit-btn"><a href="quetionTwo.php" class="skip">Skip</a></button>
    </form>
</div>

</body>
</html>
