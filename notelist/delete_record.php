<?php 
require('data.php');
$data = getDataBase();

if($_SERVER["REQUEST_METHOD"] == "DELETE") {
    $id = $_GET["id"];
    $sql = "DELETE FROM clients WHERE id=$id";
    if ($data->query($sql)) {
        echo "Запись успешно удалена";
    } else {
        echo "Ошибка при удалении записи: " . $data->error;
    }
} else {
    echo "Метод запроса не поддерживается";
}
$data->close();
?>;