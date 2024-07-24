<?php
session_start();
unset($_SESSION["usuario"]);
unset($_SESSION["usuario_name"]);
unset($_COOKIE["user_login_name"]);
session_destroy();
setcookie('user_login_name', null, -1); 
header("Location: login.php");

