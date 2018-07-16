<!DOCTYPE HTML>
<html>
        <head>

            <meta charset="utf-8">
            <title>Список Студентов</title>
            <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
            <?php  include_once (ROOT. '/view/Bootstrap.html');
            ?>
        </head>
        <body>

<?php  include_once (ROOT. '/view/userMenu.php');
?>


        <table border="1" class="table">
<?php
//$switchSort = new SortStudents();
//$switchSort ->nameSort(true);

?>

            <caption>Список Студентов</caption>

            <tr>
                <td id="name" >Имя</td>
                <td id="lastName">Фамилия</td>
                <td id="idGroup">Номер группы</td>
                <td id="balls">Баллы</td>


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






</table>
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
        ?>/<?php   echo $metodSort
        ?>" > <?php echo $page ?> </a>
    <?php  endforeach; ?>
</body>
</html>