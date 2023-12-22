<?php
session_start();
$_SESSION['id']=$_POST['id'];
if (isset($_SESSION['id']) && isset($_POST['id']) && isset($_POST['submit'])){
    
    $_SESSION['id']+=1;
}else{
    $_SESSION['id']=1;
}
if($_SESSION['id']<=10){
header('Location: ../pages/questions.php');
}else{
    header('Location: ../pages/result.php'); 
}
?>
