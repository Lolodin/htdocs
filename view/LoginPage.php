<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Поле для ввода пароля</title>
    <a href=/main/1 > Главная страница </a>
</head>
<body>
<?php
$errors = UserController::actionUserGet();
if ($errors)
foreach ($errors as $err) : ?>
<p><?php echo $err ?></p>
<?php   endforeach; ?>
<h1>Форма входа</h1>

<form action='#' method="post">
     <label for="email-field">Ваш email</label>
    <input type="text" name="email" id="email-field">
    <br><br>
    <label for="password-field">Ваш пароль</label>
    <input type="password" name="password" id="password-field" >
    <br><br>
    <input type="submit" value="Войти" >

</form>
</body>
</html>