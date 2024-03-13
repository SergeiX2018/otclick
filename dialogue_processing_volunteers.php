<?php
$id = $_POST['id'];


$id_volunteer = $_POST['id_volunteer'];
$id_volunteer = $_COOKIE['vol_id'];

$current_dates=date("d.m.y");
$current_times=date("H:i");

// $vo_id = $_COOKIE['vol_id'];

// $id_vol = $_COOKIE['id_vol'];
// echo $id_vol;
// echo $vo_id;
$id_needy = $_COOKIE['id'];
echo $id_n;
$id_v=$_POST['id_v'];
echo $id_v;
$id_n=$_POST['id_n'];
echo $id_n;

$id_vol = $_COOKIE['id'];



    $message_needy = $_POST['message_needy'];
    // echo $message_needy;
    $message_volunteer = $_POST['message_volunteer'];
    echo $message_volunteer;

    $mysql = new mysqli('localhost', 'root', '', 'vol_needy');
    $mysql->query("INSERT INTO dialogue_volunteers(`id_volunteer`, `message_volunteer`, `id_needy`, `current_dates`, `current_times`) VALUES ('$id_v', '$message_volunteer', '$id_n', '$current_dates', '$current_times')");
    

    // header('Location:dialogue_volunteers.php?id=' .$id_n. $id_v);


?>