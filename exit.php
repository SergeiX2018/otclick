<?php
setcookie('volunteer', $user['email'], time()-3600, "/");
header('Location: /');
setcookie('needy', $user['email'], time()-3600, "/");
header('Location: /');
?>