<?php
$filename = 'phonebook.json';
if (file_exists($filename)) {
    $phonebookJSON = file_get_contents($filename);
} else {
    exit('Телефонная книга не найдена');
}
if ($phonebookJSON === false) {
    exit('Не удалось получить данные');
}
$phonebookArr = json_decode($phonebookJSON, true);
if ($phonebookArr === null) {
    exit('Ошибка');
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание к лекции 2.1</title>
</head>

<body>
<h1>«Установка и настройка веб-сервера»</h1>
<h2>Телефонная книга</h2>
<table>
    <thead>
    <tr>
        <td>Имя</td>
        <td>Фамилия</td>
        <td>Телефон</td>
        <td>Адрес</td>
        <td>Электронная почта</td>
    </tr>
    </thead>

    <?php
    foreach($phonebookArr as $item) { ?>
        <tr>
            <td><?= $item["name"]; ?></td>
            <td><?= $item["lastname"]; ?></td>
            <td><?= $item["address"]; ?></td>
            <td><?= $item["email"]; ?></td>
        </tr>
        <?php
    }
    ?>

</table>
</body>
</html>