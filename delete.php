
<?php
 require 'configDB.php';
  $vol_id= $_POST[ 'vol_id'];
  $user_id = $_COOKIE['user_id'];

$vol_id = $_COOKIE['vol_id'];

  
  $img= $_POST['img'];

  $id_s = $_POST['id_s'];
  $currents_date=$_POST['currents_date'];
  $application_number=$id_s;
  
  $needy_id= $_POST['needy_id'];

  $requirement=$_POST['requirement'];
  
  setcookie("id_s", $id_s, time()+3600,'/');

  
  $mysql = new mysqli('localhost', 'root', '', 'vol_needy');
  $mysql->query("INSERT INTO applications_active(`id`, `img`, `requirement`,`needy_id`, `vol_id`, `application_number`, `currents_date` ) VALUES ('$id_s', '$img', '$requirement', '$needy_id', '$user_id', '$application_number', '$currents_date')");


  $sql = 'DELETE FROM `applications` WHERE `id_s` = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$id_s]);

  header('Location: applications_active.php?id=' .$user_id);
?>