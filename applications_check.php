<?php
$vol_id = $_POST['vol_id'];
$id = $_POST['id'];
$fff = $_COOKIE['fff'];
$text=$_POST['text'];
echo $vol_id;


$requirement = $_POST['requirement'];
$information= $_POST['information'];

$date_one= $_POST['date_one'];

$date_two= $_POST['date_two'];


$ff='22';

echo $requirement;
echo $information;


$needy_id = $_COOKIE['id'];
echo $needy_id;
$currents_date = date("d.m.y");
echo $currents_date;

$mysql = new mysqli('localhost', 'root', '', 'vol_needy');
$mysql->query("INSERT INTO applications(`needy_id`, `vol_id`,  `requirement`, `information`, `currents_date`) VALUES ('$needy_id', '$id', '$requirement', '$information', '$currents_date')");


header('Location:decoration_complete.php' );
$mysql->close();
?>

