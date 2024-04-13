<?php 
require('data.php');

$data = getDataBase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($data, $_POST["name"]);
    $email = mysqli_real_escape_string($data, $_POST["email"]);
    $surname = mysqli_real_escape_string($data, $_POST["surname"]);
    $lastname = mysqli_real_escape_string($data, $_POST["lastname"]);
    $gender = mysqli_real_escape_string($data, $_POST["gender"]);
    $date = mysqli_real_escape_string($data, $_POST["date"]);
    $phone = mysqli_real_escape_string($data, $_POST["phone"]);
    $location = mysqli_real_escape_string($data, $_POST["location"]);
    $comment = mysqli_real_escape_string($data, $_POST["comment"]);

    $sql = "INSERT INTO clients (`Фамилия`, `Имя`, `Отчество`, `Пол`, `Дата рождения`, `Телефон`, `Адрес`, `Почта`, `Комментарий`) VALUES ('$surname', '$name', '$lastname', '$gender', '$date', '$phone', '$location', '$email', '$comment')";
    if ($data->query($sql) === TRUE) {
        echo "Данные успешно добавлены в базу данных.";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $data->error;
    }
} else {
    // Если данные не были отправлены методом POST
    echo "Ошибка: данные не были отправлены методом POST.";
}

$data->close();
?>
