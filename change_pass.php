<?php
 
$email=$_POST['email'];

$old_password=$_POST['old_password'];
$new_password=$_POST['new_password'];
$vol_email=$_COOKIE['volunteer'];
$needy_email=$_COOKIE['needy'];
$mysql = new mysqli('localhost', 'root', '', 'vol_needy');  
$email=$_POST['email'];

$result = $mysql->query ("(SELECT * FROM volunteers WHERE `email`='$vol_email')");
$result_two = $mysql->query ("(SELECT * FROM needy WHERE `email`='$needy_email')");
$user = $result->fetch_assoc();
$user_two = $result_two->fetch_assoc();

echo $vol_email;
echo $email;



$to='sergeix2004@gmail.com';
$subject='Восстановление пароля';
$mesage='Здравствуйте!  Вы запросили информацию по восстановлению пароля. Если это были не Вы, просто проигнорируйте данное сообщение';
$headers="from:otklik.ru\r\n";
mail($to, $subject, $mesage, $headers);











if($old_password==$user['password'] AND $email==$vol_email){
    echo '1';
    $mysql = new mysqli('localhost', 'root', '', 'vol_needy');
    $mysql->query("UPDATE `volunteers` SET `password`='$new_password'  WHERE `email`='$vol_email'");
}

if($old_password==$user_two['password'] AND $email==$needy_email){
    $mysql = new mysqli('localhost', 'root', '', 'vol_needy');
    $mysql->query("UPDATE `needy` SET `password`='$new_password'  WHERE `email`='$needy_email'");
    
}


else{
    
    echo "Вы ввели неправильный email или password";

}
  





$user = $result->fetch_assoc();
?>