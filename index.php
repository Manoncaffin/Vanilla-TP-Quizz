<?php
include_once('./partials/header.php');
?>


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

<?php
// header('Location: ./pages/play.php');
?>


<?php
include_once('./partials/footer.php');
?>