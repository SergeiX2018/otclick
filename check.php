<?php

 

 $fio_vol = $_POST['fio_vol'];
 $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
$date_vol = $_POST['date_vol'];
 $gender_vol= $_POST['gender_vol'];
 $city_vol=$_POST['city_vol'];
 $address_vol=$_POST['address_vol'];
 $phone_vol=$_POST['phone_vol'];
 $email_vol=$_POST['email_vol'];
 $password_vol=$_POST['password_vol'];
 $info_vol=$_POST['info_vol'];
 
 
 

 

 




$mysql = new mysqli('localhost', 'root', '', 'vol_needy');
$mysql->query("INSERT INTO volunteers( `fio`, `img`, `date`,  `gender`, `city`, `address`,`phone`, `email`, `password`,`info`) VALUES ('$fio_vol', '$img', '$date_vol', '$gender_vol', '$city_vol', '$address_vol', '$phone_vol', '$email_vol', '$password_vol','$info_vol')");

if(isset($_POST['upload'])){
  $img_type = substr($_FILES['img_upload']['type'], 0, 5);
  $img_size = 2*1024*1024;
  if(!empty($_FILES['img_upload']['tmp_name']) and $img_type === 'image' and $_FILES['img_upload']['size'] <= $img_size){ 
  $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
  $mysql->query("INSERT INTO volunteers (img) VALUES ('$img')");
  }
}else{
    setcookie('volunteers', $user['email'], time()+3550, "/");
    header('Location:office_volunteer.php');
}






// if(isset($_POST['upload_needy'])){
//   $img_type = substr($_FILES['img_upload']['type'], 0, 5);
//   $img_size = 2*1024*1024;
//   if(!empty($_FILES['img_upload_needy']['tmp_name']) and $img_type === 'image' and $_FILES['img_upload']['size'] <= $img_size){ 
//   $img_needy = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
//   $mysql->query("INSERT INTO needy (img_needy) VALUES ('$img_needy')");
//   }
// }else{
//     setcookie('needy', $user['email'], time()+3550, "/");
//     header('Location:office_needy.php');
// }




$result = $mysql->query ("(SELECT * FROM volunteers  WHERE `email`='$email_vol' AND `password`='$password_vol') UNION (SELECT * FROM needy  WHERE `email`='$email' AND `password`='$password')");

$user = $result->fetch_assoc();
if(isset($user) == ''){
    echo "Такой пользователь не найден";
    exit();
}else{
  setcookie('volunteers', $user['email'], time()+3550, "/");

  header('Location:office_volunteer.php?id=' .$user['vol_id']);
}





$mysql->close();




?>


