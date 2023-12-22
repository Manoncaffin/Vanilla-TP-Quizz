<?php
include_once('../partials/header.php');
session_start();
?>


<h2>Bonjour <?php echo $_SESSION['pseudo'] ?></h2>




<?php
include_once('../partials/footer.php');
?>