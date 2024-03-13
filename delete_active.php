<?php
$user_id = $_COOKIE['user_id'];

  require 'configDB.php';
  $vol_id= $_POST[ 'vol_id'];
  $user_id = $_COOKIE['user_id'];
  echo $user_id;




  $img= $_POST['img'];

  $id = $_POST['id'];

  

  
  $needy_id= $_POST['needy_id'];


  $requirement=$_POST['requirement'];
  
  
//   setcookie("id_s", $id_s, time()+3600,'/');

  
  $mysql = new mysqli('localhost', 'root', '', 'vol_needy');
  $mysql->query("INSERT INTO applications_complete(`id`, `img`,  `requirement`,`needy_id`, `vol_id`) VALUES ('$id', '$img',  '$requirement', '$needy_id', '$vol_id')");
  

  $sql = 'DELETE FROM `applications_active` WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$id]);

  header("Location: application_complete.php?id=" .$user_id);
  
?>