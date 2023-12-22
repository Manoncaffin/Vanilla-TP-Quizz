<?php

if (isset($_POST['id']) && isset($_POST['submit'])){
    session_start();
$_SESSION['id']=$_POST['id'];
    $_SESSION['id']+=1;
}else{
    $_SESSION['id']=1;
}
// var_dump( $_SESSION['id']);
if($_SESSION['id']<=10){
 header('Location: ../pages/questions.php');
}else{
     header('Location: ../pages/result.php');
    $_SESSION['id']=1;
    $_POST['id']=1;
}





?>


<!-- <?php
if (isset($_POST['id'])){
    var_dump($_POST['id']);
 
$id=$_POST['id'];
require_once('../process/database_connect.php');
$request = $database->query("SELECT * FROM question WHERE id = $id");
$questions = $request->fetch();
// var_dump($questions);
$request = $database->prepare("SELECT * FROM answer WHERE id = $id");
$answers = $request->execute();
$score=0;
if('question'. $questions['id']==='a'){$score=$score+1;}
if('question'. $questions['id']==='b'){$score=$score+0;}
if('question'. $questions['id']==='c'){$score=$score+0;}
if('question'. $questions['id']==='d'){$score=$score+0;}

$_SESSION['score']=$score;
// var_dump($_SESSION['score']); -->

}

?>  





