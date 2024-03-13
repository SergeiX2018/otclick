<?php

 
 $fio_vol = $_POST['fio_vol'];
$date_vol = $_POST['date_vol'];
 $gender_vol= $_POST['gender_vol'];
 $city_vol=$_POST['city_vol'];
 $address_vol=$_POST['address_vol'];
 $phone_vol=$_POST['phone_vol'];
 $email_vol=$_POST['email_vol'];
 $password_vol=$_POST['password_vol'];
 $info_vol=$_POST['info_vol'];
$row = mysql_fetch_assoc($queryResult);
echo 'ID : ' . $row['id'] . '<br />';                                
$d1 = date('Y', strtotime($date)); 
$d2 = date("Y"); 
?>
                                


                                





