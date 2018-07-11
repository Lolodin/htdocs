<!DOCTYPE HTML>
<html>
        <head>
            <link href="/CSS/MainPage.css"  type="text/css" rel="stylesheet"  />
            <meta charset="utf-8">
            <title>Список Студентов</title>
            <script src="/config/simplescript.js">aaa</script>
        </head>
        <body>
        <a href=/register/ ><div class="Register"> <p>Регистрация</p></div> </a>
        <br>
        <a href=/login/ ><div class="Login"> <p> Вход </p></div></a>
        <br>


        <table border="1">


            <caption>Список Студентов</caption>

            <tr>
                <td itemref="" Имя</td>
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