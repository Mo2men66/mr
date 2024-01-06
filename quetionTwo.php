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

<div class="quiz-container">
    <h1>Mr. Linguistic</h1>
    <hr>
    <form id="quiz-form" method="POST" action="check2.php">
        <div class="d-flex">
            <div class="question">
                <p>How can you write "I want to die today" in Spanish?</p>
                <div class="answers">
                    <label>
                        <input type="radio" name="answer" v alue="Me siento triste">
                        Me siento triste
                    </label>
                    <label>
                        <input type="radio" name="answer" value="Quiero irme hoy">
                        Quiero irme hoy
                    </label>
                    <label>
                        <input type="radio" name="answer" value="Quiero morir hoy">
                        Quiero morir hoy
                    </label>
                    <label>
                        <input type="radio" name="answer" value="Apoyo nacional">
                        Apoyo nacional
                    </label>
                </div>
            </div>
        </div>
        <input type="submit"class="submit-btn" value="check" name="check_btn" class="btn">
    </form>
    <form action="">
    <button class="submit-btn"><a href="home.html" class="skip">Skip</a></button>
    </form>
</div>

</body>
</html>
