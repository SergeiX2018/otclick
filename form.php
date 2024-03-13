<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
    <title>Document</title>
</head>
<body>
<form method="POST" action="sup.php" id="form">
    <legend>Пример передачи всех полей формы</legend>
    <div>
        <label for="name">Имя:</label>
        <input id="name" name="name" value="" type="text">
    </div>
    <div>
        <label for="email">Email адрес:</label>
        <input id="email" name="email" value="" type="email">
    </div>
    <input id="send" value="Отправить" type="submit">
</form>
<script
  src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"></script>
<script  src="js.js"></script>
</body>
</html>