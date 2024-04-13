<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require('menu.php');

        $id = $_GET["id"];
    ?>
    <form name="form_add" action="edit_record.php" method="post">
        <div class="column">

            <div class="add">
            <label>Форма номер</label> <input type="text" name="id" placeholder="" value="<?php print_r($id) ?>" readonly>
            </div>
            <div class="add">
                <label>Фамилия</label> <input type="text" name="surname" placeholder="Фамилия" value="">
            </div>
            <div class="add">
                <label>Имя</label> <input type="text" name="name" placeholder="Имя" value="">
            </div>
            <div class="add">
                <label>Отчество</label> <input type="text" name="lastname" placeholder="Отчество" value="">
            </div>
            <div class="add">
                <label>Пол</label> 
                <select name="gender">
                    <option value="мужской">мужской</option>
                    <option value="женский">женский</option>
                </select>
            </div>
            <div class="add">
                <label>Дата рождения</label> <input type="date" name="date" value="">
            </div>
            <div class="add">
                <label>Телефон</label> <input type="text" name="phone" placeholder="Телефон" value="">
            </div>
            <div class="add">
                <label>Адрес</label> <input type="text" name="location" placeholder="Адрес" value=""> 
            </div>
            <div class="add">
                <label>Email</label> <input type="email" name="email" placeholder="Email" value="">
            </div>
            <div class="add">
                <label>Комментарий</label> <textarea name="comment" placeholder="Краткий комментарий"></textarea>
            </div>
        
                <button type="submit" value="Отправить" name="button" class="form-btn">Отправить</button>
        </div>
        </form>
    
        <script>

        </script>
</body>
</html>
