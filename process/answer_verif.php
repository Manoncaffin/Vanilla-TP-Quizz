<?php
session_start();
$_SESSION['id']=$_POST['id'];
if (isset($_POST['id']) && isset($_POST['submit'])){
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
