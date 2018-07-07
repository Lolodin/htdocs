<!DOCTYPE HTML>
<html>
        <head>
            <link href="/CSS/MainPage.css"  type="text/css" rel="stylesheet"  />
            <meta charset="utf-8">
            <title>Список Студентов</title>
        </head>
        <body>

        <div class="lol">
            <p class="LolRed">Регистрация</p>
            <p> Вход </p>
        </div>

        <table border="1">


            <caption>Список Студентов</caption>
            <tr>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Номер группы</td>
                <td>Баллы</td>


    </tr>
    <?php



    foreach ( $a as $newsItem  )  :                    ?>
        <tr><?php if($newsItem['Name']){}
            else
                continue;
        ?>
        <td><?php echo $newsItem['Name']   ?></td>
        <td><?php echo $newsItem['LastName']   ?></td>
        <td><?php echo $newsItem['idGroup']   ?></td>
        <td><?php echo $newsItem['Balls']   ?></td>
        </tr>
<?php endforeach; ?>
<div>
    <a href=/register/ > <p>Регистрация</p> </a>
    <a href=/login/ > <p> Вход </p></a>
</div>

            <?php
            $generatePage = new PageGenerate();
            $amountPage = $generatePage->GeneratePage();


            if ($amountPage==1)   //if one page, pagination off
            {

            }
            else
                foreach ($amountPage as $page) :
            ?>
           <a href="/main/<?php   echo $page
            ?>/" > <?php echo $page ?> </a>
            <?php  endforeach; ?>
</table>
</body>
</html>