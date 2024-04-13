<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>База данных</title>
</head>
<body>
<?php
require('menu.php');
require('data.php');
$data = getDataBase();

$sql = "SELECT * FROM clients";

$result = $data->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="record">';
        foreach($row as $value) {
            echo '<div class="cell">'.$value.'</div>';
        }
        echo '</div>';
    }
} else {
    echo "В таблице нет данных";
}
$data->close();
?>    
</body>
</html>
