<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur le quizz !</title>
    <link rel="stylesheet" href="/Exercices_PHP/Vanilla-TP-Quizz/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>

<main>
    <section id="four">
        <p class="classement">Voici votre place dans le classement</p>
            
        <div class="container col-5 podium">
            <div id="podiumSecond">
                <div class=podiumNumber>2</div>
            </div>
            <div id="podiumFirst">
                <div class=podiumNumber>1</div>
            </div>
            <div id="podiumThird">
                <div class=podiumNumber>3</div>
            </div>
        </div>


        <?php 
        // foreach ($users as $user){
        //     echo $user['pseudo'] . "est en ... position avec un score de <br>";
        // }
        //   foreach ($scores as $score){
        //     echo $score['score'] . "<br>";
        //     }
        ?>

    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>