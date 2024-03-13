<?php
$vol_id = $_GET['id'];

$db = mysqli_connect("localhost", "root", "", "vol_needy");
$query = mysqli_query($db, "SELECT * FROM `volunteers` WHERE `vol_id`='{$vol_id}'");
$array = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Профиль <?=$array['vol_id']?></title>
</head>
<body>
    <h1>Никнейм: <?=$array['date']?></h1>
    <h1>Возраст: <?=$array['fio']?></h1>
    <h1>Пол:c</h1>
    <h1>Дата регистрации: <?=$array['reg_date']?></h1>
</body>
</html>
