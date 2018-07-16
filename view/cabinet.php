<!DOCTYPE HTML>
<html>
        <head>
            <meta charset="utf-8">
            <title>Личный кабинет</title>
            <?php  include_once (ROOT. '/view/Bootstrap.html');
            ?>
        </head>
        <body>
        <?php  include_once (ROOT. '/view/userMenu.php');

        ?>


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
        <td><input type="text" value="<?php echo $newsItem['idGroup']   ?>" name="idGroup" </td>
        <td><input type="text" value="<?php echo $newsItem['Balls']   ?>" name="Balls"</td>

        </tr>
        <input type="submit" value="Редактировать">
        </form>





<?php endforeach; ?>


</table>
</body>
</html>