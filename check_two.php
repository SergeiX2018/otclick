<?php
$fio = $_POST['fio'];
$img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
$date = $_POST['date'];
 $gender= $_POST['gender'];
 $city=$_POST['city'];
 $address=$_POST['address'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $info=$_POST['info'];




 $mysql = new mysqli('localhost', 'root', '', 'vol_needy');
 $mysql->query("INSERT INTO needy( `fio`, `img_needy`, `date`,  `gender`, `city`, `address`,`phone`, `email`, `password`,`info`) VALUES ('$fio', '$img', '$date', '$gender', '$city', '$address', '$phone', '$email', '$password','$info')");


if(isset($_POST['upload'])){
  $img_type = substr($_FILES['img_upload']['type'], 0, 5);
  $img_size = 2*1024*1024;
  if(!empty($_FILES['img_upload']['tmp_name']) and $img_type === 'image' and $_FILES['img_upload']['size'] <= $img_size){ 
  $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
  $mysql->query("INSERT INTO needy (img_needy) VALUES ('$img')");
  }
}else{
    setcookie('needy', $user['email'], time()+3550, "/");
    // header('Location:office_needy.php');
}



 $result = $mysql->query ("(SELECT * FROM needy  WHERE `email`='$email' AND `password`='$password') UNION (SELECT * FROM volunteers  WHERE `email`='$email_vol' AND `password`='$password_vol')");

 $user_two = $result->fetch_assoc();
 if(isset($user_two) == ''){
     echo "Такой пользователь не найден";
     exit();
 }else{
   setcookie('needy', $user_two['email'], time()+3550, "/");
 echo $user_two['id'];
  //  header('Location:office_needy.php?id=' .$user_two['id']);
 }
 
 
 
 
 
 $mysql->close();





 ?>

