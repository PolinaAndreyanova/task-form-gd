<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Форма</title>
</head>

<body class="content">
    <form class="content__info" method="post" action="formHandler.php">
        <h1 class="content__header">Введите текст</h1>

        <input class="content__input" type="text" name="text" value="" placeholder="Текст" required />

        <button class="content__button" type="submit" name="generate">Сгенерировать</button>
    </form>
</body>

</html>