<?php

 
 $email=$_POST['email'];
 $password=$_POST['password'];


$mysql = new mysqli('localhost', 'root', '', 'vol_needy');
$result = $mysql->query ("(SELECT * FROM volunteers  WHERE `email`='$email' AND `password`='$password')");
$result_two = $mysql->query ("(SELECT * FROM needy  WHERE `email`='$email' AND `password`='$password')");

$user = $result->fetch_assoc();
$user_two = $result_two->fetch_assoc();


if($user){
  echo $user;
  setcookie('volunteer', $user['email'], time()+3600, "/");
  header('Location:office_volunteer.php?id=' .$user['vol_id']);
 
}
 if ($user_two){
  setcookie('needy', $user_two['email'], time()+3600, "/");
  header('Location:office_needy.php?id=' .$user_two['id']);
 
}

if(!$user AND !$user_two){
  session_start();
  $_SESSION['invalid_password']= 'Ошибка входа. Неверный логин или пароль';
        header('Location:authorization.php');
 
};


$mysql->close();



 ?>














 
