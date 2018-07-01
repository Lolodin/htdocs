<!DOCTYPE HTML>
<html>
        <head>
            <meta charset="utf-8">
            <title>Личный кабинет</title>
        </head>
        <body>
        <a href=/logout/ > Выход </a>
        <a href=/main/1 > Главная страница </a>


        <table border="1">


            <caption>Ваши Данные</caption>
            <tr>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Номер группы</td>
                <td>Баллы</td>


    </tr>
    <?php
   $a = User::getuserDate($userId);
    foreach ( $a as $newsItem  )  :
     ?>
        <tr><?php

        ?>
            <form action='update' method="post">
        <td><input type="text" value="<?php echo $newsItem['Name']   ?>" name="name" ></td>
        <td><input type="text" value="<?php echo $newsItem['LastName']   ?>" name="lastname"></td>
        <td><?php echo $newsItem['idGroup']   ?></td>
        <td><?php echo $newsItem['Balls']   ?></td>

        </tr>
        <input type="submit" value="Редактировать">
        </form>




</form>

<?php endforeach; ?>


</table>
</body>
</html>