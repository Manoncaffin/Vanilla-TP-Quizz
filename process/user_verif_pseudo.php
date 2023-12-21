<?php

var_dump($_POST);
require_once('./database_connect.php');
if(
    isset($_POST["pseudo"]) && !empty($_POST["pseudo"])
){

    $request = $database->query('SELECT pseudo FROM user');
    $pseudos = $request->fetchAll();

}

// header('Location: ../index.php');

?>