<?php

if(isset($_COOKIE['id']) && isset($_COOKIE['pass'])) header('Location: php/welcome.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<link rel='stylesheet' type='text/css' href='../css/index.css'/>
    <script src="../js/index.js" defer></script>
</head>
<body>

	<div class="registr-container">
        <div class='media-progress'></div>
        <div class="error-container">
            <div class="error-log"></div>
        </div>
        <p class='come'>Registration</p>
        <div class="main-form"> 
            <p><label class="login-text">Ваш Email: </label>
            <input class="login-field" name="login" type="email" size="40" maxlength="40" /></p> 
            <p><label class="registr-pass-text">Придумайте пароль: </label>
            <input class="registr-pass-field" name="pass" type="password" size="40" maxlength="40" /></p> 
            <p><label class="alias-text">Придумайте никнейм: </label>
            <input class="alias-field" name="alias" type="text" size="12" maxlength="12" /></p> 
            <p><input class="registr-btn" type="submit" value="Зарегистрироваться" onclick="client.registr()"></p> 
            <p><a class="index" href='../index.php'>На главную</a></p>
        </div>
	</div>

</body>
</html>