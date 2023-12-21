<?php

try{
    $dsn = 'mysql:host=localhost;dbname=quizz';

    $username = 'root';

    $password = 'root';

    $database = new PDO($dsn, $username, $password);
}
catch (Exception $message){
    echo "il y a un problème <br>" . $message;
}

?>