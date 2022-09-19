
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP практика</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="flex-container">
        <div class="header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>
        </div>

        <div class="about_me">

            <h1> <?php echo $p ?></h1>

            <div class="data">
                <div class="my_img">
                    <?php echo '<img src="img/php.jpg" width="420" height="320" alt="img">' ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                    echo 'город', ' ', $city; ?> </p>

                    <p> Мне
                    <?php echo $age; ?>
                    лет </p>

                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                <?php include 'knowledge.inc.php'; ?>
                <?php echo $a, ' ', $b, ' ', $c; ?>
                <?php $a = 15;
                      $b = 23;
                      $c = $a * $b;
                      echo $c;
                ?>
                <?php echo $d; ?>
            </div>
            <div class="article">
                <p class="text">
                    Этот проект был создан по практическому заданию hacker-1002 школы Skillfactory, в целях проверки
                    пройденного материала в модуле web-программирование на PHP. Отработан на IDE PhpStorm и локальном
                    web-сервере XAMPP.
                </p>
            </div>
        </div>
        <?php include 'footer.inc.php'; ?>
    </div>
</body>
</html>





