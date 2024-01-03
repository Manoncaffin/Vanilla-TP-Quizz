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
    <section id="one" class="d-flex justify-content-center">
        <div class="container-md col-5 text-center">
            <h2>Venez tester vos expressions !</h2>

            <form action="process/user_verif_pseudo.php" method="post">
                <div>
                    <label for="pseudo" class="form-label pt-5 pb-2">Entrez votre pseudo pour jouer</label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo" required />
                    <div class="pt-2">
                        <button type="submit" class="btn btn-light btn-lg text-black">VALIDER</button>
                    </div>
                </div>
        </div>
    </section>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>