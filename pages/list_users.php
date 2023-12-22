<?php
include_once('../partials/header.php');
?>


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

<?php
include_once('../partials/footer.php');
?>