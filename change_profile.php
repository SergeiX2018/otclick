<?php

$img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
$id_vol=$_POST['id_vol'];
 $f = $_POST['f'];
 $i = $_POST['i'];
 $o = $_POST['o'];
 echo $f;
 echo $i;
 echo $o;

$date = $_POST['date'];
 
 $city=$_POST['city'];
 $address=$_POST['address'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
setcookie("vol_email", $Eemail, time()+3600,'/');
 $info=$_POST['info'];

echo $date;

 $mysql = new mysqli('localhost', 'root', '', 'vol_needy');
$mysql->query("UPDATE `volunteers` SET `img`='$img', `fio`='$f $i $o',  `date`='$date',  `city`='$city', `address`='$address',  `phone`='$phone',   `email`='$email', `info`='$info'  WHERE vol_id = '$id_vol'");
if(isset($_POST['upload'])){
    $img_type = substr($_FILES['img_upload']['type'], 0, 5);
    $img_size = 2*1024*1024;
    if(!empty($_FILES['img_upload']['tmp_name']) and $img_type === 'image' and $_FILES['img_upload']['size'] <= $img_size){ 
    $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
    $mysql->query("UPDATE `volunteers` SET `img`='$img'");
    }
  }

  ?>