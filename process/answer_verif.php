<?php
session_start();
if (isset($_POST['id']) || isset($_POST['test'])) {

    $_SESSION['id'] = $_POST['id'];
    $_SESSION['id'] += 1;
} else {
    $_SESSION['id'] = 1;
}
var_dump($_SESSION['id']);
if ($_SESSION['id'] <= 10) {
    header('Location: ../pages/questions.php');
    // echo 'nextQuestion'; // Echo this response to indicate going to the next question

} else {
    header('Location: ../pages/result.php');
    // echo 'goToResult'; // Echo this response to indicate going to the result page
    $_SESSION['score'] = 0;
    $_SESSION['id'] = 1;
    $_POST['id'] = 1;
}




// if (isset($_SESSION['id'])) {
//     $id = $_SESSION['id'];
// } else {
//     $id = 1;
// }
// require_once('../process/database_connect.php');
// $request = $database->query("SELECT * FROM answer WHERE id = $id");
// $answers = $request->fetch();

$score = 0;
if (isset($_POST['answer1']) && !empty($_POST['answer1']) && isset($_POST['good_answer'])) {
    if ($_POST['answer1'] === $_POST['good_answer'] ) {
    
        $score += 1;
        $_SESSION['score']+=$score;

    }
    }
  

