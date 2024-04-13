<?php
require_once('data.php');
$data = getDataBase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = mysqli_real_escape_string($data, $_POST["id"]);

    $name = mysqli_real_escape_string($data, $_POST["name"]);
    $email = mysqli_real_escape_string($data, $_POST["email"]);
    $surname = mysqli_real_escape_string($data, $_POST["surname"]);
    $lastname = mysqli_real_escape_string($data, $_POST["lastname"]);
    $gender = mysqli_real_escape_string($data, $_POST["gender"]);
    $date = mysqli_real_escape_string($data, $_POST["date"]);
    $phone = mysqli_real_escape_string($data, $_POST["phone"]);
    $location = mysqli_real_escape_string($data, $_POST["location"]);
    $comment = mysqli_real_escape_string($data, $_POST["comment"]);


    $sql = "UPDATE clients SET `Имя`='$name', `Почта`='$email', `Фамилия`='$surname', `Отчество`='$lastname', `Пол`='$gender', `Дата Рождения`='$date', `Телефон`='$phone', `Адрес`='$location', `Комментарий`='$comment' WHERE `id`=$id";

    if ($data->query($sql) === TRUE) {
        echo "Запись успешно обновлена";
    } else {
        echo "Ошибка при обновлении записи: " . $data->error;
    }
} else {
    echo "Ошибка: данные не были отправлены методом POST.";
}

$data->close();
?>
