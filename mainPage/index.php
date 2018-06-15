<!DOCTYPE HTML>
<html>
        <head>
            <meta charset="utf-8">
            <title>Список Студентов</title>
        </head>
        <body>



        <table border="1">


            <caption>Список Студентов</caption>
            <tr>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Номер группы</td>
                <td>Баллы</td>


    </tr>
    <?php foreach ( $a as $newsItem  )  :                    ?>
        <tr>
        <td><?php echo $newsItem['Name']   ?></td>
        <td><?php echo $newsItem['LastName']   ?></td>
        <td><?php echo $newsItem['idGroup']   ?></td>
        <td><?php echo $newsItem['Balls']   ?></td>
        </tr>
<?php endforeach; ?>

            <a href=/register/ > Регистрация </a>
</table>
</body>
</html>