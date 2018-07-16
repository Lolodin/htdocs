<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php  include_once (ROOT. '/view/userMenu.php');
    ?>
    <title>Поле для  регистрации</title>
    <?php  include_once (ROOT. '/view/Bootstrap.html');
    ?>
</head>
<body>
<?php

$errors = UserController::actionUserput();
if ($errors)
foreach ($errors as $err) : ?>
<p><?php echo $err ?></p>
<?php   endforeach; ?>
<h1>Форма регистрации</h1>

<form action='#' method="post">
    <label for="login-field">Ваш логин</label>
    <input type="text" name="name" id="login-field">
    <br><br>
    <label for="email-field">Ваш email</label>
    <input type="text" name="email" id="email-field">

    <br><br>
    <label for="password-field">Ваш пароль</label>
    <input type="password" name="password" id="password-field" >
    <br><br>
    <input type="submit" value="Регистрация" >

</form>
</body>
</html>