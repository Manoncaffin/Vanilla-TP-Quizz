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







// if(isset($_POST['time_started'])){
// $time = time();
//       $_SESSION['time_started'] = $time;
//       $_SESSION['time_remaining'] = 5; 

// }

?>








