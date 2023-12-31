<?php
 session_start();
if (isset($_POST['id']) && isset($_POST['submit'])){
   
$_SESSION['id']=$_POST['id'];
    $_SESSION['id']+=1;
}else{
    $_SESSION['id']=1;
}
// var_dump( $_SESSION['id']);
if($_SESSION['id']<=10){
header('Location: ../pages/questions.php');
// echo 'nextQuestion'; // Echo this response to indicate going to the next question

}else{
    header('Location: ../pages/result.php');
    // echo 'goToResult'; // Echo this response to indicate going to the result page

    $_SESSION['id']=1;
    $_POST['id']=1;
}








?>








