<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
function getMenu() {
    return '<div class="upper-menu">
    <a href="viewer.php" class="upper-menu__button">Просмотр</a>
    <a href="add.php" class="upper-menu__button">Добавление записи</a>
    <a href="edit.php" class="upper-menu__button">Редактирование записи</a>
    <a href="delete.php" class="upper-menu__button">Удаление записи</a>
    </div> 
';
};
echo getMenu();
?> 

<script src="active.js"></script>
</body>
</html>