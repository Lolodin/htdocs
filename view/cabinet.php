<!DOCTYPE HTML>
<html>
        <head>
            <meta charset="utf-8">
            <title>Личный кабинет</title>
        </head>
        <body>



        <table border="1">


            <caption>Ваши Данные</caption>
            <tr>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Номер группы</td>
                <td>Баллы</td>


    </tr>
    <?php



   $a = User::GetuserDate($userId);






    foreach ( $a as $newsItem  )  :                    ?>
        <tr><?php

        ?>
        <td><?php echo $newsItem['Name']   ?></td>
        <td><?php echo $newsItem['LastName']   ?></td>
        <td><?php echo $newsItem['idGroup']   ?></td>
        <td><?php echo $newsItem['Balls']   ?></td>
        </tr>
<?php endforeach; ?>


</table>
</body>
</html>